/**
* Fungsi untuk menampilkan hasil download
* @param {string} result - Nama file yang didownload
*/
function showDownload (result) {
    console.log("Download selesai");
    console.log("Hasil Download:" + result);
}
/**
* Fungsi untuk download file
* @param {function} callback Function callback show
*/
function download(callback) {
    return new Promise((resolve) => {
        setTimeout(() => {
            const result = "windows-10.exe";
            resolve(result);
        }, 3000);
    }).then(callback);
}

download(showDownload);