<?php
declare(strict_types=1);

namespace App\Controller;

class StudentsController extends AppController
{

    // --- INDEX FUNCTION ---
    public function index()
    {
        // 1. Get the search key
        $key = $this->request->getQuery('key');

        // 2. Prepare the query
        $query = $this->Students->find();

        // 3. Search logic
        if ($key) {
            $query->where([
                'OR' => [
                    'name LIKE' => '%' . $key . '%',
                    'matric_no LIKE' => '%' . $key . '%',
                    'course LIKE' => '%' . $key . '%',
                ]
            ]);
        }

        // 4. Send to page (This MUST be inside index)
        $students = $this->paginate($query);
        $this->set(compact('students'));
    } // <--- Index closes here

    public function view($id = null)
    {
        // Get the student by ID
        $student = $this->Students->get($id);
        
        // Send the data to the page
        $this->set(compact('student'));
    }

    // --- ADD FUNCTION ---
    public function add()
    {
        $student = $this->Students->newEmptyEntity();
        
        if ($this->request->is('post')) {
            $student = $this->Students->patchEntity($student, $this->request->getData());
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        
        $this->set(compact('student'));
    }
    
    public function edit($id = null)
    {
        // 1. Find the student by ID (or show error if not found)
        $student = $this->Students->get($id);

        // 2. Save changes if the user clicked Submit
        if ($this->request->is(['patch', 'post', 'put'])) {
            $student = $this->Students->patchEntity($student, $this->request->getData());
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }

        // 3. Send the student data to the form (so the inputs are pre-filled)
        $this->set(compact('student'));
    }// <--- Add closes here

    public function delete($id = null)
    {
        // Security check: Ensure this is a POST or DELETE request 
        // (prevents deleting via simple URL typing)
        $this->request->allowMethod(['post', 'delete']);

        $student = $this->Students->get($id);
        
        if ($this->Students->delete($student)) {
            $this->Flash->success(__('The student has been deleted.'));
        } else {
            $this->Flash->error(__('The student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

} // <--- Class closes here