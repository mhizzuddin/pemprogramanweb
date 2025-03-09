<?php
// Define the Mahasiswa class
class Mahasiswa {
    private $nim;
    private $nama;

    // Method to set data
    public function setData($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    // Method to get data
    public function getData() {
        return "NIM: " . $this->nim . "<br>Nama: " . $this->nama;
    }
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];

    // Create Mahasiswa object
    $mahasiswa = new Mahasiswa();
    
    // Set data using the method
    $mahasiswa->setData($nim, $nama);

    // Display the data
    echo "<h2>Data Mahasiswa</h2>";
    echo $mahasiswa->getData();
} else {
    echo "No data submitted.";
}
?>