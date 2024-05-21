<?php

// CandidateController.php
require_once '../model/Candidate.php';

class CandidateController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllCandidates() {
        $query = $this->db->prepare("SELECT * FROM candidates");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCandidateById($id) {
        $query = $this->db->prepare("SELECT * FROM candidates WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public function addCandidate($name, $party, $position) {
        $candidate = new Candidate($this->db);
        $candidate->addCandidate($name, $party, $position);
        // Add any additional logic or redirection
    }

    public function updateCandidate($id, $name, $party, $position) {
        $candidate = new Candidate($this->db);
        $candidate->updateCandidate($id, $name, $party, $position);
        // Add any additional logic or redirection
    }

    public function deleteCandidate($id) {
        $candidate = new Candidate($this->db);
        $candidate->deleteCandidate($id);
        // Add any additional logic or redirection
    }

    // Add other candidate-related methods
}
?>
