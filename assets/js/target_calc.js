let target = "x"

function validate(value) {
    if (value < 0 || value > 100 ) {
        showValueExceedError("Value should be around 0 and 100")
        return false
    }
    return true
}

$(document).ready( () => {
    $(".marks").on("keyup change", function () {
        if (target !== "x")
            calculateTargetAverage(target)
    })

    $("[name='target']").on("keyup change", function () {
        let value = $(this).val()
        if (!validate(value)) {
            $(this).val("")
            target = "x"
        } else {
            target = value
        }
        renderAvg(calculateTargetAverage(target))
    })
})

/*
if ($('body').hasClass("tc"))
    isTargetCalc = true

function calculateTargetAverage(target) {
    let calculatedPurata = calculatePurata()
    if (target !== "x") {
        let avg = (target * 48 - calculatedPurata[1]) / calculatedPurata[3]
        renderAvg(avg)
        return avg
    }
}


function renderAvg(avg) {
    let text = "The average you should get for the remaining papers: " + (Math.round((avg + Number.EPSILON) * 100) / 100).toString()
    if (avg > 100){
        $('#puratatc').removeClass('btn-success btn-danger btn-warning btn-primary').addClass('btn-danger')
    } else if (avg > 90) {
        $('#puratatc').removeClass('btn-success btn-danger btn-warning btn-primary').addClass('btn-warning')
    }  else if (avg > 0) {
        $('#puratatc').removeClass('btn-success btn-danger btn-warning btn-primary').addClass('btn-success')
    }  else if (avg < 0) {
        $('#puratatc').removeClass('btn-success btn-danger btn-warning btn-primary').addClass('btn-primary')
    }
    $('#text').html(text)
}
*/