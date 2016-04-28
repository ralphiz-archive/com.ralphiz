/*
Name column formatter
*/
function nameFormatterFunction(column, row) {
    var name_str = row.name.replace(/^\s+|\s+$/g, '');
    var names = name_str.split(",");
    //var id_str = row.actions.replace(/^\s+|\s+$/g, '');
    //var ids = id_str.split(",");
    // View Button
    var nameLinked = '<div><img style="height: 40px; width: 40px; border-radius: 25px; float: left; margin-right: 10px;" class="img-responsive" src=":profileimage" alt="" "/><p>' + names[0] + ' ' + names[1] + '.' + '</p></div>';
    //console.log(names);
    //nameLinked = nameLinked.replace(':jobid', ids[0]);
    //nameLinked = nameLinked.replace(':profileid', ids[1]);
    nameLinked = nameLinked.replace(':profileimage', names[2]);
    return nameLinked;
}

function skill1_FormatterFunction(column, row) {
    var skill1_str = row.skill1.replace(/^\s+|\s+$/g, '');
    var skill1 = skill1_str.split(",");
    console.log(skill1_str);
    console.log(skill1);
    var formattedColumn = '<div><p>'+skill1[1]+'</p></div>';
    return formattedColumn;
}

function skill2_FormatterFunction(column, row) {
    var skill2_str = row.skill2.replace(/^\s+|\s+$/g, '');
    var skill2 = skill2_str.split(",");
    console.log(skill2_str);
    console.log(skill2);
    var formattedColumn = '<div><p>'+skill2[1]+'</p></div>';
    return formattedColumn;
}

function skill3_FormatterFunction(column, row) {
    var skill3_str = row.skill3.replace(/^\s+|\s+$/g, '');
    var skill3 = skill3_str.split(",");
    console.log(skill3_str);
    console.log(skill3);
    var formattedColumn = '<div><p>'+skill3[1]+'</p></div>';
    return formattedColumn;
}