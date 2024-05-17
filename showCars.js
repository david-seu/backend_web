$((function () {
    function refresh() {
        let brand = $("#brand")
        $.getJSON("showCarsBackend.php", {brand: brand.val()}, function (json) {
            $("table tr:gt(0)").remove()
            json.forEach(function (thing) {
                $("table").append(`<tr>
                                <td>${thing[1]}</td>
                                <td>${thing[2]}</td>
                                <td>${thing[3]}</td>
                                <td>${thing[4]}</td>
                                <td>${thing[5]}</td>
                                <td>${thing[6]}</td>
                                <td>${thing[7]}</td>
                                <td>${thing[8]}</td>
                                <td>${thing[9]}</td>
                                <td>${thing[10]}</td>
                                <td>${thing[11]}</td>
                                <td>
                                    <a href=updateCar.php?id=${thing[0]}>Update</a>
                                    <br>
                                    <a href=deleteCar.php?id=${thing[0]}>Delete</a>
                                    <br>
                                </td>
                               </tr>`)
            })
        })
        $("#info").text(`The query has been done with the brand "${brand.val()}"`)
    }

    $("#brand").on("input", function () {
        refresh()
    })

    refresh()
}));
