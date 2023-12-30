function hitungTotal() {
    var kodeBarang = document.getElementById("kode").value;
    var jumlahBarang = parseInt(document.getElementById("jumlah").value);
    
    var hargaBarang = 0;
    switch ("kodeBarang") {
        case 1:
            hargaBarang = 10.000;
            break;
        case 2:
            hargaBarang = 20.000;
            break;
        case 3:
            hargaBarang = 30.000;
            break;
        default:
            alert("kode barang  tidak ditemukan");
            return;
    }

    var totalBayar = hargaBarang + jumlahBarang;
    alert("Total yang harus dibayar : Rp" + totalBayar);

    var jumlahBarang = prompt("masukan jumlah uang yang ingin dibayar: ");
    jumlahUang = parseFloat(jumlahUang);

    if (isNaN(jumlahUang) || jumlahUang === null ) {
        alert("input jumlah uang yang ingin dibatalkan.");
    } else {
        var kembalian = jumlahUang - totalBayar;
    } if (kembalian >= 0) {
        alert("Total kembalian : Rp" + kembalian);
    } else {
        alert("jumlah uang tidak mencukupi");
    }


}