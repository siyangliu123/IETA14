<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Foods Controller
 *
 * @property \App\Model\Table\FoodsTable $Foods
 *
 * @method \App\Model\Entity\Food[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FoodsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $filter = $this->request->getQuery('filter');
        if ($filter == "nuts") {
            $foods = $this->Foods->find('all')
                ->where([
                    'food_name LIKE' => 'Nut%'
                ]);
        } else if ($filter == "unhealthy") {
            $foods = $this->Foods->find('all')
                ->where(['OR' => [
                        'food_categories LIKE' => 'Processed meat%',
                        'food_sodium >' => '1000'
                    ]]);
        } else if ($filter == "drinks") {
            $foods = $this->Foods->find('all')
                ->where([
                    'food_alcohol >' => '1'
                ]);
        } else {
            $foods = $this->Foods->find('all');
        }

        $this->set(compact('foods'));
    }

    /**
     * View method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $food = $this->Foods->get($id, [
            'contain' => [],
        ]);

        $this->set('food', $food);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $food = $this->Foods->newEntity();
        if ($this->request->is('post')) {
            $food = $this->Foods->patchEntity($food, $this->request->getData());
            if ($this->Foods->save($food)) {
                $this->Flash->success(__('The food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food could not be saved. Please, try again.'));
        }
        $this->set(compact('food'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $food = $this->Foods->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $food = $this->Foods->patchEntity($food, $this->request->getData());
            if ($this->Foods->save($food)) {
                $this->Flash->success(__('The food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food could not be saved. Please, try again.'));
        }
        $this->set(compact('food'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $food = $this->Foods->get($id);
        if ($this->Foods->delete($food)) {
            $this->Flash->success(__('The food has been deleted.'));
        } else {
            $this->Flash->error(__('The food could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function healthyNutrition()
    {
        $nutritions1 = $this->Foods->find('all')
            ->where([
                'food_name LIKE' => 'Nut%'
            ]);
        $this->set(compact('nutritions1'));

        $nutritions2 = $this->Foods->find('all')
            ->where([
                'food_alcohol >' => '1'
            ]);
        $this->set(compact('nutritions2'));

        $nutritions3 = $this->Foods->find('all')
            ->where(['food_saturated_fatty_acids >' => 16, 'food_categories LIKE' => 'Processed meat%']);
        $this->set(compact('nutritions3'));
    }

    public function calculator(){
        $foods = $this->Foods->find('all');
        $this->set(compact("foods"));
    }

}
