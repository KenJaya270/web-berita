const artikelTanggal = document.querySelector('#artikelTanggal').innerHTML;
const node = document.createElement('span');
let tanggal = artikelTanggal.split("-")[2];
node.innerText = tanggal;
artikelTanggal.appendChild(node);
function insertArtikel() {
    const tanggal_up = document.querySelector('#tanggal_up').value;
    const bulan_up = document.querySelector('#bulan_up');
    const tahun_up = document.querySelector('#tahun_up');

    const dataBulan = [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Agu',
        'Sep',
        'Okt',
        'Nov',
        'Des'
    ];

    tahunDanBulan_up = tanggal_up.split('-');
    if (tahunDanBulan_up[1].split("")[0] == 0) {
        bulan_up.value = dataBulan[tahunDanBulan_up[1].split("")[1] - 1];
    } else {
        bulan_up.value = tahunDanBulan_up[1];
    }
    tahun_up.value = tahunDanBulan_up[0];
}

