
$(document).ready(loadData())

setInterval(loadData, 1)

function loadData() {
    $.ajax({
        type: 'GET',
        url: 'JS/formations.json',
        dataType: 'json',
        success: function (data) {
            console.log(data)
            var table_data = '';
            var nav_data = '';
            $.each(data, function (key, value) {
                table_data += '<tr>';
                table_data += '<td class="colonne1">' + value.nom + '</td>';
                table_data += '<td>' + value.volume + '</td>';
                table_data += '<td>' + value.taxe + '</td>';
                table_data += '<td>' + value.ht + '</td>';
                table_data += '<td>' + value.ttc + '</td>';
                table_data += '</tr>';
                nav_data += '<li><a>' + value.nom + '</li></a>';
            });
            $("#table tbody").html("");
            $("#nav ul").html("");
            $("#table").append(table_data);
            $("#nav ul").append(nav_data);

        }
    });
}



