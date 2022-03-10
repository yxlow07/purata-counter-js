let purata = 100
let marksAndPemberat = { chn: "x", bm: "x" }

// let toastTrigger = document.getElementById('liveToastBtn');
// let toastLiveExample = document.getElementById('liveToast')
// if (toastTrigger) {
//     toastTrigger.addEventListener('click', function () {
//         let toast = new bootstrap.Toast(toastLiveExample)
//
//         toast.show()
//     })
// }

function showValueExceedError(errorToast) {
    let toast = new bootstrap.Toast(errorToast)
    toast.show()
}

$(document).ready( (event) => {
    $(".marks").on("keyup", function() {
        let name = $(this).attr('name')
        marksAndPemberat[name] = $(this).val()
        console.log(marksAndPemberat)
    })
})