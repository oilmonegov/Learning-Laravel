<?php

class AssignmentTest{

    public function test_post_creates_new_assignment()
    {
        $this->post('/assignments', [
            'title' => 'My great Assignment'
        ]);
        
        $this->seeInDatabase('assignments', [
            'title' => 'My great Assignment'
        ]);
    }
}