function loadStudents() {
	$.get('http://217.71.129.139:4029/api/students.php', function (data) {
		let students = JSON.parse(data)['students'];
		console.log(STUDENTS)
//		showTable (students)
	});
}

function showTable(students) {
	let table = $('#tbl_all>tbody')
	for (let i = 0; i < students.length; i++) {
		let tr = $("<tr>")
		let tdl = $('<td>' + students[i].id +'</td>')
		let td2 = $('<td>' + students[i].name + '</td>')
		let td3 = $('<td>' + students[i].surname + '</td>')
		let td4 = $('<td>' + students[i].group + '</td>')
		let td5 = $('<td></td>')
		let btn = $('<button>Подробности</button>')
		btn.click(function (){
			showInfo(students[i])
	})


	td5.append(btn)
	tr.append(td1).append(td2).append(td3).append(td4)
	table.append(tr)
	}
}

function showInfo (student){
	
	let div = $('#info')
	div.html('')


	let head = $('<h1>Информация о студенте № '+student.id+'</h1>')
	let name = $('<h3>'+student.name +' '+student.surname +'</h3>')
	let group = $('<h3> Группа: '+student.group+'</h3>')

	div.append(head).append(name).append(group)
	
}
