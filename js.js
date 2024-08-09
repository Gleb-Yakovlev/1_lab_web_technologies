var name = "Не введено"
var surname = "Не введено"
var patronymic = "Не введено"
var dateOfBirth = "Не введено"
var placeOfBirth = "Не введено"
var avatar = "Не введено"
var height = "Не введено"
var weight = "Не введено"

function addData() {
    name = pr("Введите имя:")
    surname = pr("Введите фамилию:")
    patronymic = pr("Введите отчество:")
    dateOfBirth = pr("Введите дату рождения:")
    placeOfBirth = pr("Введите место рождения:")
    avatar = pr("Введите аватар:")
    height = pr("Введите рост:")
    weight = pr("Введите вес:")
    document.write(name, surname, patronymic, dateOfBirth, placeOfBirth, avatar,
        height, weight);
    return name
}

function pr(title){
    result = prompt(title);
    return result
}