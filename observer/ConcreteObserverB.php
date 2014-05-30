<?php 
class ConcreteObserverB implements ObserverInterface {

    public function update(SubjectInterface $subject)
    {
        echo "I'm also being notified with " . $subject->getState();
    }
}