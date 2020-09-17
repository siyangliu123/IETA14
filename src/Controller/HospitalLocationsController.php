<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HospitalLocations Controller
 *
 * @property \App\Model\Table\HospitalLocationsTable $HospitalLocations
 *
 * @method \App\Model\Entity\HospitalLocation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HospitalLocationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $hospitalLocations = $this->paginate($this->HospitalLocations);

        $this->set(compact('hospitalLocations'));
    }

    /**
     * View method
     *
     * @param string|null $id Hospital Location id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hospitalLocation = $this->HospitalLocations->get($id, [
            'contain' => [],
        ]);

        $this->set('hospitalLocation', $hospitalLocation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hospitalLocation = $this->HospitalLocations->newEntity();
        if ($this->request->is('post')) {
            $hospitalLocation = $this->HospitalLocations->patchEntity($hospitalLocation, $this->request->getData());
            if ($this->HospitalLocations->save($hospitalLocation)) {
                $this->Flash->success(__('The hospital location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hospital location could not be saved. Please, try again.'));
        }
        $this->set(compact('hospitalLocation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hospital Location id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hospitalLocation = $this->HospitalLocations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hospitalLocation = $this->HospitalLocations->patchEntity($hospitalLocation, $this->request->getData());
            if ($this->HospitalLocations->save($hospitalLocation)) {
                $this->Flash->success(__('The hospital location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hospital location could not be saved. Please, try again.'));
        }
        $this->set(compact('hospitalLocation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hospital Location id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hospitalLocation = $this->HospitalLocations->get($id);
        if ($this->HospitalLocations->delete($hospitalLocation)) {
            $this->Flash->success(__('The hospital location has been deleted.'));
        } else {
            $this->Flash->error(__('The hospital location could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function listHospitals(){
        $hospitalLocations = $this->HospitalLocations->find('all');
        $this->set(compact('hospitalLocations'));
    }
}
