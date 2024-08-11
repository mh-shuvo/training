<?php

// Example 1: Medical Capsule
class Capsule {
    private $medicines = array();

    public function addMedicine($medicine) {
        $this->medicines[] = $medicine;
    }

    public function showMedicines() {
        // foreach ($this->medicines as $medicine) {
        //     echo $medicine . "\n";
        // }
        echo implode("\n",$this->medicines);
    }
}

$capsule = new Capsule();
$capsule->addMedicine("Paracetamol");
$capsule->addMedicine("Vitamin C");
$capsule->showMedicines();

echo "\n";

// Example 2: Organization Structure
class Organization {
    private $departments = array();

    public function addDepartment($department) {
        $this->departments[] = $department;
    }

    public function showDepartments() {
        foreach ($this->departments as $department) {
            echo $department . "\n";
        }
    }
}

$organization = new Organization();
$organization->addDepartment("Production");
$organization->addDepartment("Sales");
$organization->addDepartment("Accounts");
$organization->showDepartments();
?>
