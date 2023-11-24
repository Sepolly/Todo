const toggleTodoForm = document.getElementById("toggle_todo_form");
const TodoForm = document.getElementById("todo_form");
const closeTodoForm = document.getElementById("close_todo_form");

toggleTodoForm.addEventListener('click',()=>{
    TodoForm.style.display="block";
    toggleTodoForm.style.display="none";
})

closeTodoForm.addEventListener('click',()=>{
    TodoForm.style.display="none";
    toggleTodoForm.style.display="flex";
})

