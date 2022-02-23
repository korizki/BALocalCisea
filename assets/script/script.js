
// Memunculkan form input produksi
function hideForm(){
    const cont = document.querySelector(".input_cont");
    cont.style.display="none";
}
// Menyembunyikan Form Input produksi
function showForm(){
    const cont= document.querySelector(".input_cont");
    cont.style.display="flex";
}
// Memunculkan form input losstime
function hideFormProb(){
    const cont_prob = document.querySelector(".input_cont_prob");
    cont_prob.style.display="none";
}
// Menyembunyikan Form Input losstime
function showFormProb(){
    const cont_prob = document.querySelector(".input_cont_prob");
    cont_prob.style.display="flex";
}
// Mendapatkan nilai hari dari input tanggal
var myDays = ["Minggu", "Senin", "Selasa","Rabu","Kamis","Jumat","Sabtu"];
const date = document.getElementById('tanggal');
var dates = new Date(date);
date.addEventListener('change', function(){
    var dates = new Date(date.value);
    const days = dates.getDay();
    hari.value = myDays[days];
})
// mendapatkan hm operasi
function getHours(){
    const hmOperasi = document.getElementById('hm_operasi');
    const jamOperasi = document.getElementById('jam_operasi');
    hmOperasi.value = (hmAkhir.value - hmAwal.value).toFixed(1);
    jamOperasi.value = hmOperasi.value;
}
const hmAwal = document.getElementById('hm_awal');
const hmAkhir = document.getElementById('hm_akhir');
hmAkhir.addEventListener('input', getHours);
hmAwal.addEventListener('input', getHours);

