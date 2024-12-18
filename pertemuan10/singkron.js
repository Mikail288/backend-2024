//praktik asynchronus menggunakan callback pada step memasak mie
const persiapan = () => {
    console.log("Mempersiapkan bahan...");
};

const rebusAir = () => {
    console.log("Merebus air...");
};

const masak = () => {
    console.log("Memasak mie...");
    console.log("Selesai");
};

const main = () => {
    setTimeout(() => {
        persiapan();
        setTimeout(() => {
            rebusAir();
            setTimeout(() => {
                masak();
            }, 5000);
        }, 7000);
    }, 3000);
};

main();