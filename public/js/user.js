function insertArtikel(){
    const tanggal_up = document.querySelector('#tanggal_up');
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
    console.log(tahunDanBulan_up);
}