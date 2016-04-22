function name() {
    console.log("do something");
}

function nameFormatterFunction(column, row) {
    var name_str = row.name.replace(/^\s+|\s+$/g, '');
    var names = name_str.split(",");
    //var id_str = row.actions.replace(/^\s+|\s+$/g, '');
    //var ids = id_str.split(",");
    // View Button
    var nameLinked = '<div><img style="height: 40px; width: 40px; border-radius: 25px; float: left; margin-right: 10px;" class="img-responsive" src=":profileimage" alt="" "/><p>' + names[0] + ' ' + names[1] + '.' + '</p></div>';
    console.log(names[0]);
    //nameLinked = nameLinked.replace(':jobid', ids[0]);
    //nameLinked = nameLinked.replace(':profileid', ids[1]);
    nameLinked = nameLinked.replace(':profileimage', names[2]);
    return nameLinked;
}