function goBack() {
    window.history.back()
};
jQuery(document).ready(function($) {
    //call the ajax
    $.ajax({
        url: object_name.templateUrl + '/inc/files/sample.json',
        dataType: "text"
    }).success(function(data) {
        var data = $.parseJSON(data).sort();
        data.sort(function SortByID(x, y) {
            return y.id - x.id;
        });
        for (i = 0; i < data.length; i++) {

            // create the html output
            var output = ' <tr> <td>' + data[i].nama + '</td><td>' + data[i].kota + '</td><td> Rp. ' + data[i].donasi + '</td></tr>';

            $('#donatur-data').append(output);
        }
    });
});
