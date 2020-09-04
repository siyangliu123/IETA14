<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MortalityRecord Controller
 *
 * @property \App\Model\Table\MortalityRecordTable $MortalityRecord
 *
 * @method \App\Model\Entity\MortalityRecord[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MortalityRecordController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $mortalityRecord = $this->paginate($this->MortalityRecord);

        $this->set(compact('mortalityRecord'));
    }

    public function visualisation()
    {
        $query = $this->MortalityRecord->find('all');
        $results = $query->all();
        $mortalityRecords = $results->toList();
        $this->set('mortalityRecords', $mortalityRecords);
    }

    /**
     * View method
     *
     * @param string|null $id Mortality Record id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mortalityRecord = $this->MortalityRecord->get($id, [
            'contain' => [],
        ]);

        $this->set('mortalityRecord', $mortalityRecord);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mortalityRecord = $this->MortalityRecord->newEntity();
        if ($this->request->is('post')) {
            $mortalityRecord = $this->MortalityRecord->patchEntity($mortalityRecord, $this->request->getData());
            if ($this->MortalityRecord->save($mortalityRecord)) {
                $this->Flash->success(__('The mortality record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mortality record could not be saved. Please, try again.'));
        }
        $this->set(compact('mortalityRecord'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mortality Record id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mortalityRecord = $this->MortalityRecord->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mortalityRecord = $this->MortalityRecord->patchEntity($mortalityRecord, $this->request->getData());
            if ($this->MortalityRecord->save($mortalityRecord)) {
                $this->Flash->success(__('The mortality record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mortality record could not be saved. Please, try again.'));
        }
        $this->set(compact('mortalityRecord'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mortality Record id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mortalityRecord = $this->MortalityRecord->get($id);
        if ($this->MortalityRecord->delete($mortalityRecord)) {
            $this->Flash->success(__('The mortality record has been deleted.'));
        } else {
            $this->Flash->error(__('The mortality record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
