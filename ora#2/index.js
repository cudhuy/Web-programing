const infoStudent = {
	mssv: '20194780',
	name: 'TRẦN ĐỨC HUY',
	gioiTinh: 'Nam',
	namVaoTruong: 2019,
	lop: 'ICT 02-K64',
	bacDaoTao: 'KSCLC-TN-TT-VN-ICT',
	khoaHoc: 64,
	chuongTrinh: 'Công nghệ thông tin Global ICT 2019',
	khoaVien: 'Trường Công nghệ - Thông tin và Truyền Thông',
	mail: 'huy.td194780@sis.hust.edu.vn',
	tinhTrang: 'Học',
};

const showInfo = (infoStudent) => {
	document.getElementById('mssv').innerText = infoStudent.mssv;
	document.getElementById('name').innerText = infoStudent.name;
	document.getElementById('gioiTinh').innerText = infoStudent.gioiTinh;
	document.getElementById('nam-vao-truong').innerText =
		infoStudent.namVaoTruong;
	document.getElementById('bac-dao-tao').innerText = infoStudent.bacDaoTao;
	document.getElementById('chuong-trinh').innerText = infoStudent.chuongTrinh;
	document.getElementById('tinh-trang').innerText = infoStudent.tinhTrang;
	document.getElementById('khoa-vien').innerText = infoStudent.khoaVien;
	document.getElementById('lop').innerText = infoStudent.lop;
	document.getElementById('khoa').innerText = infoStudent.khoaHoc;
	document.getElementById('mail').innerText = infoStudent.mail;

	document.getElementById('mssv-input').value = infoStudent.name;
	document.getElementById('name-input').value = infoStudent.name;
	document.getElementById('gioiTinh-input').value = infoStudent.gioiTinh;
	document.getElementById('nam-vao-truong-input').value =
		infoStudent.namVaoTruong;
	document.getElementById('bac-dao-tao-input').value = infoStudent.bacDaoTao;
	document.getElementById('chuong-trinh-input').value = infoStudent.chuongTrinh;
	document.getElementById('tinh-trang-input').value = infoStudent.tinhTrang;
	document.getElementById('khoa-vien-input').value = infoStudent.khoaVien;
	document.getElementById('lop-input').value = infoStudent.lop;
	document.getElementById('khoa-input').value = infoStudent.khoaHoc;
	document.getElementById('mail-input').value = infoStudent.mail;
};

showInfo(infoStudent);

document.getElementById('btn-group').style.display = 'none';
document.getElementById('change-avatar').style.display = 'none';
document.getElementById('avatar-preview').style.display = 'none';

const inputList = document.getElementsByClassName('input-info');
for (inputItem of inputList) {
	inputItem.style.display = 'none';
}

//click edit
const clickEdit = () => {                                                                                                 
	document.getElementById('btn-group').style.display = 'flex';
	document.getElementById('change-avatar').style.display = 'block';

	document.getElementById('avatar-preview').style.display = 'block';
	document.getElementById('avatar').style.display = 'none';

	const listInfo = document.getElementsByClassName('infoSV');

	for (info of listInfo) {
		info.style.display = 'none';
	}
	for (inputItem of inputList) {
		inputItem.style.display = 'block';
	}
	var infoBlock = document.getElementById('info-block');
	if (infoBlock.style.display === 'none') {
		infoBlock.style.display = 'block';
	} else {
		infoBlock.style.display = 'none';
	}
};

//clickSubmit
const onSubmit = () => {
	document.getElementById('change-avatar').style.display = 'none';
	document.getElementById('avatar-preview').style.display = 'none';
	document.getElementById('avatar').style.display = 'block';

	if (document.getElementById('name-input').value === '') {
		alert('Tên không hợp lệ !!!');
		return;
	}
	document.getElementById('btn-group').style.display = 'none';
	const infoChange = {
		mssv: document.getElementById('mssv-input').value,
		name: document.getElementById('name-input').value,
		gioiTinh: document.getElementById('gioiTinh-input').value,
		namVaoTruong: document.getElementById('nam-vao-truong-input').value,
		lop: document.getElementById('lop-input').value,
		bacDaoTao: document.getElementById('bac-dao-tao-input').value,
		khoaHoc: document.getElementById('khoa-input').value,
		chuongTrinh: document.getElementById('chuong-trinh-input').value,
		khoaVien: document.getElementById('khoa-vien-input').value,
		mail: document.getElementById('mail-input').value,
		tinhTrang: document.getElementById('tinh-trang-input').value,
	};
	console.log(infoChange);
	const listInfo = document.getElementsByClassName('infoSV');
	for (info of listInfo) {
		info.style.display = 'inline-block';
	}
	for (inputItem of inputList) {
		inputItem.style.display = 'none';
	}
	showInfo(infoChange);

	document.getElementById('avatar').src =
		document.getElementById('avatar-preview').src;
	document.getElementById('change-avatar').value = '';
	// var mssvInput = document.getElementById('mssv-input');
	// var mssv = document.getElementById('mssv');
	// mssv.innerText = mssvInput.value;

	// Hide the info block
	var infoBlock = document.getElementById('info-block');
	infoBlock.style.display = 'none';
};

//clickCancel
const onCancel = () => {
	document.getElementById('change-avatar').style.display = 'none';
	document.getElementById('avatar-preview').style.display = 'none';
	document.getElementById('avatar').style.display = 'block';
	document.getElementById('btn-group').style.display = 'none';
	console.log(infoStudent);
	const listInfo = document.getElementsByClassName('infoSV');
	for (info of listInfo) {
		info.style.display = 'inline-block';
	}
	for (inputItem of inputList) {
		inputItem.style.display = 'none';
	}

	console.log(document.getElementById('avatar').src);

	document.getElementById('avatar-preview').src =
		document.getElementById('avatar').src;
	document.getElementById('change-avatar').value = '';
};

//clickReset
const onReset = () => {
	document.getElementById('change-avatar').style.display = 'none';
	document.getElementById('avatar-preview').style.display = 'none';
	document.getElementById('avatar').style.display = 'block';
	document.getElementById('btn-group').style.display = 'none';
	console.log(infoStudent);
	const listInfo = document.getElementsByClassName('infoSV');
	for (info of listInfo) {
		info.style.display = 'inline-block';
	}
	for (inputItem of inputList) {
		inputItem.style.display = 'none';
	}
	document.getElementById('avatar').src = './image/avatar.png';
	document.getElementById('avatar-preview').src =
		document.getElementById('avatar').src;
	document.getElementById('change-avatar').value = '';
	showInfo(infoStudent);
};

//changeAvatar
const onChangeAvatar = () => {
	const reader = new FileReader();
	reader.addEventListener('load', () => {
		document.getElementById('avatar-preview').src = reader.result;
	});
	const file = document.getElementById('change-avatar').files[0];
	if (file) {
		reader.readAsDataURL(file);
	}
};
