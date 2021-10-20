<?php
namespace FactoryMethod;

abstract class HiringManager
{
    // Factory method
    abstract public function makeInterviewer(): Interviewer;

    public function takeInterviewer()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}