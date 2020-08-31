<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Nutritions Controller
 *
 * @property \App\Model\Table\NutritionsTable $Nutritions
 *
 * @method \App\Model\Entity\Nutrition[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NutritionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $nutritions = $this->Nutritions->find('all');

        $this->set(compact('nutritions'));
    }

    public function nutritionList()
    {
        $filter = $this->request->getQuery('filter');
        $nutritions = $this->Nutritions->find('all');
        if($filter=="healthy"){

        }
        if($filter=="unhealthy"){

        }
        else{
            $nutritions = $this->Nutritions->find('all');

        }

        $this->set(compact('nutritions'));
    }

    /**
     * View method
     *
     * @param string|null $id Nutrition id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nutrition = $this->Nutritions->get($id, [
            'contain' => [],
        ]);

        $this->set('nutrition', $nutrition);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nutrition = $this->Nutritions->newEntity();
        if ($this->request->is('post')) {
            $nutrition = $this->Nutritions->patchEntity($nutrition, $this->request->getData());
            if ($this->Nutritions->save($nutrition)) {
                $this->Flash->success(__('The nutrition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nutrition could not be saved. Please, try again.'));
        }
        $this->set(compact('nutrition'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nutrition id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nutrition = $this->Nutritions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nutrition = $this->Nutritions->patchEntity($nutrition, $this->request->getData());
            if ($this->Nutritions->save($nutrition)) {
                $this->Flash->success(__('The nutrition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nutrition could not be saved. Please, try again.'));
        }
        $this->set(compact('nutrition'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nutrition id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nutrition = $this->Nutritions->get($id);
        if ($this->Nutritions->delete($nutrition)) {
            $this->Flash->success(__('The nutrition has been deleted.'));
        } else {
            $this->Flash->error(__('The nutrition could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
