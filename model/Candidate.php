<?php

class Candidate {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addCandidate($name, $party, $position) {
        $query = $this->db->prepare("INSERT INTO candidates (name, party, position) VALUES (:name, :party, :position)");
        $query->execute(['name' => $name, 'party' => $party, 'position' => $position]);
    }

    public function updateCandidate($id, $name, $party, $position) {
        $query = $this->db->prepare("UPDATE candidates SET name = :name, party = :party, position = :position WHERE id = :id");
        $query->execute(['id' => $id, 'name' => $name, 'party' => $party, 'position' => $position]);
    }

    public function deleteCandidate($id) {
        $query = $this->db->prepare("DELETE FROM candidates WHERE id = :id");
        $query->execute(['id' => $id]);
    }

    // Add other candidate-related methods
}
?>
