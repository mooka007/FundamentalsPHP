
var students =  [

    "ABOU-ELHAITAM OUMAIMA",
    "DOUGHMI TAHA",
    "KAZOUM OMAR",
    "NAFFA ANAS",
    "Bahassane Dounia",
    "anas jaballah",
    "Hatim Rouchdi",
    "Jalil Juicha",
    "Chaimae Mita",
    "Mohammed wanir",
    "Zakaria Kerkazou",
    "Yasser Elmahfoudi",
    "Khadija Chennaoui",
    "Azeddine Maslouh",
    "Abdelmoughit El Bouhmydy",
    "Zaiad es-sahel",
    "Ali Chaayb",
    "Nouhaila Elaalami",
    "Adam Bakkar",
    "Soumia Essabiry",
    "Abderrazzaq Mars",
    "Abdelaziz Riad",
    "Achraf Samoudi",
    "Karima Benalioua",
    "Oussama Elkhaldaoui",
    "Imrane chaibi",


]

function _random(){

   var i = Math.floor(Math.random() * 26 ) + 1;
   var test = students[i];

//    alert(test);

    Swal.fire({
        title:  students[i] ,
        confirmButtonText: 'ok',
        confirmButtonColor: '#FFD166',
        color: '#fff',
        background: '#333' ,
        padding: '40px',
        showClass: {
        popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
        }
    })

}