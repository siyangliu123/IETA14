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
        if ($filter == "seeds") {
            $nutritions = $this->Nutritions->find('all')
                ->where([
                    'nutrition_sat_fat >' => 0,
                    'nutrition_is_veg' => '0',
                    'nutrition_categories LIKE' => '%seeds%'
                ]);
        } else if ($filter == "unhealthy") {
            $nutritions = $this->Nutritions->find('all')
                ->where(['nutrition_sat_fat >' => 16, 'nutrition_is_veg' => '1']);
        } else if ($filter == "alcohol") {
            $nutritions = $this->Nutritions->find('all')
                ->where([
                    'nutrition_is_veg' => '0',
                    'nutrition_categories LIKE' => '%alcohol%'
                ]);
        } else {
            $nutritions = $this->Nutritions->find('all');
        }

        $this->set(compact('nutritions'));
    }

    public function healthyNutrition()
    {
        $nutritions1 = $this->Nutritions->find('all')
            ->where([
                'nutrition_sat_fat >' => 0,
                'nutrition_is_veg' => '0',
                'nutrition_categories LIKE' => '%seeds%'
            ]);
        $this->set(compact('nutritions1'));

        $nutritions2 = $this->Nutritions->find('all')
            ->where([
                'nutrition_is_veg' => '0',
                'nutrition_categories LIKE' => '%alcohol%'

            ]);
        $this->set(compact('nutritions2'));

        $nutritions3 = $this->Nutritions->find('all')
            ->where(['nutrition_sat_fat >' => 16, 'nutrition_is_veg' => '1']);
        $this->set(compact('nutritions3'));
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
