// script.js
function showForm() {
    const role = document.getElementById('role').value;
    const studentForm = document.getElementById('form_fill_student');
    const teacherForm = document.getElementById('form_fill_teacher');
    const staffForm = document.getElementById('form_fill_staff');

    // Hide all forms initially
    studentForm.style.display = 'none';
    teacherForm.style.display = 'none';
    staffForm.style.display = 'none';

    // Show the selected form
    if (role === 'Student') {
        studentForm.style.display = 'block';
    } else if (role === 'Teacher') {
        teacherForm.style.display = 'block';
    } else if (role === 'Non-Academic Staff') {
        staffForm.style.display = 'block';
    }
}
