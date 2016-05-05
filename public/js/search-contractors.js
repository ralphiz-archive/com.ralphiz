/*
Bootgrid formatters
*/
function nameFormatter(column, row) {
    var name_str = row.name.replace(/^\s+|\s+$/g, '');
    var names = name_str.split(",");
    var nameLinked = '<div><img style="height: 40px; width: 40px; border-radius: 25px; float: left; margin-right: 10px;" class="img-responsive" src=":profileimage" alt="" "/><p>' + names[0] + ' ' + names[1] + '.' + '</p></div>';
    nameLinked = nameLinked.replace(':profileimage', names[2]);
    return nameLinked;
}

function skill1Formatter(column, row) {
    var skill1_str = row.skill1.replace(/^\s+|\s+$/g, '');
    var skill1 = skill1_str.split(",");
    var formattedColumn = '<div><p>' + skill1[1] + '[' + skill1[0] + ']</p></div>';
    return formattedColumn;
}

function skill2Formatter(column, row) {
    var skill2_str = row.skill2.replace(/^\s+|\s+$/g, '');
    var skill2 = skill2_str.split(",");
    var formattedColumn = '<div><p>' + skill2[1] + '[' + skill2[0] + ']</p></div>';
    return formattedColumn;
}

function skill3Formatter(column, row) {
    var skill3_str = row.skill3.replace(/^\s+|\s+$/g, '');
    var skill3 = skill3_str.split(",");
    var formattedColumn = '<div><p>' + skill3[1] + '[' + skill3[0] + ']</p></div>';
    return formattedColumn;
}

function lookingFormatter(column, row) {
    var looking = row.looking;
    //console.log(looking);
    if (looking === '1') {
        return '<div>Yes</div>';
    } else {
        return '<div>No</div>';
    }
}

function actionsFormatter(column, row) {
    var email_str = row.email.replace(/^\s+|\s+$/g, '');
    var copyButton = '<button id="demo" onclick="copyToClipboard(\':email\')">Copy E-mail</button>';
    copyButton = copyButton.replace(':email', email_str);
    return copyButton;
}
/*
END Bootgrid Formatters
*/
function copyToClipboard(text) {
    window.prompt("Copy to clipboard: Ctrl+C, Enter", text);
}