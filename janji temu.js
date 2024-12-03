document.addEventListener('DOMContentLoaded', function () {
  const serviceDropdown = document.getElementById('service');
  const doctorDropdown = document.getElementById('doctor');
  const form = document.getElementById('appointmentForm');
  const successMessage = document.getElementById('successMessage');

  // Daftar dokter berdasarkan layanan
  const doctorsByService = {
    poli_anak: ['Dr. Jasmine Cooper - Spesialis Anak'],
    poli_bedah: ['Dr. David Brown - Spesialis Bedah Ortopedi'],
    poli_kulit_dan_kelamin: ['Dr. Linda Davis - Spesialis Dermatologi'],
    poli_tht: ['Dr. Sarah Williams - Spesialis THT'],
    poli_penyakit_dalam: ['Dr. Michael Lee - Spesialis Penyakit Dalam'],
    poli_ginekologi: ['Dr. Jennifer Clark - Spesialis Ginekologi']
  };

  // Event listener untuk perubahan pilihan layanan
  serviceDropdown.addEventListener('change', function () {
    const selectedService = serviceDropdown.value;
    doctorDropdown.innerHTML = '<option value="">Pilih dokter</option>';

    if (selectedService && doctorsByService[selectedService]) {
      doctorsByService[selectedService].forEach(doctor => {
        const option = document.createElement('option');
        option.value = doctor;
        option.textContent = doctor;
        doctorDropdown.appendChild(option);
      });
    }
  });

  // Event listener untuk submit form
  form.addEventListener('submit', function (event) {
    event.preventDefault(); // Mencegah form mengirimkan data secara langsung

    // Menampilkan pesan sukses
    successMessage.style.display = 'block';
    
    // Mereset form dan dropdown dokter
    form.reset();
    doctorDropdown.innerHTML = '<option value="">Pilih layanan terlebih dahulu</option>';
  });
});
