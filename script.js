let marksAndPemberat = { chinese: [7, "x"], bm: [6, "x"], eng: [5, "x"], mm:  [5, "x"], sc:  [5, "x"], "rbt/ask":  [4, "x"], sjh:  [3, "x"], geo:  [3, "x"], cocurriculum : [3, "x"],}

function showValueExceedError(errorToast) {
    let toast = new bootstrap.Toast(errorToast)
    toast.show()
}

for (const subject in marksAndPemberat){
    let pemberat = marksAndPemberat[subject][0]
    $("#tbody").append(`<tr> <th scope="row" class="text-capitalize">${subject}</th> <td>${pemberat}</td><td> <label><input type="number" name="${subject}" min="0" max="100" class="form-control wide marks"></label> </td></tr>`)
}

function calculatePurata() {
    let totalMarksWithPemberat = 0
    let totalPemberat = 0

    for (const subject in marksAndPemberat){
        let pemberat = marksAndPemberat[subject][0]
        let marks = marksAndPemberat[subject][1]
        if (marks !== "x"){
            totalMarksWithPemberat += marks * pemberat
            totalPemberat += pemberat
        }
    }

    return [totalMarksWithPemberat / totalPemberat, totalMarksWithPemberat, totalPemberat]
}

function updatePurata(purata) {
    let roundedPurata = Math.round((purata + Number.EPSILON) * 1000) / 1000
    if (roundedPurata < 60){
        if ($('#purata-badge').hasClass("btn-success"))
            $("#purata-badge").addClass("btn-danger").removeClass("btn-success")
    } else {
        if ($('#purata-badge').hasClass("btn-danger"))
            $("#purata-badge").removeClass("btn-danger").addClass("btn-success")
    }
    $("#purata").html(roundedPurata)
}

$(document).ready( (event) => {
    $(".marks").on("keyup change", function() {
        let name = $(this).attr('name')
        let marks = $(this).val()
        let intMarks = parseInt(marks)
        if (0 <= intMarks && intMarks <= 100) {
            marksAndPemberat[name][1] = intMarks
        } else if (marks === "") {
            // Do nothing
        } else {
            showValueExceedError($("#errorToast"))
            console.log("Error")
            $(this).val("")
        }
        let purata = calculatePurata()
        updatePurata(purata[0])
        console.log(purata)
    })

    $("#submit").on("click", () => {
        let purata = calculatePurata()
        updatePurata(purata[0])
        console.log(purata)
    })
})