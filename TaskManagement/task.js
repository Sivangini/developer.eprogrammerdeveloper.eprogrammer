// Task data array to store tasks
let tasks = JSON.parse(localStorage.getItem('taskInfo')) || [];

// Completed task data array
let completedTasks = JSON.parse(localStorage.getItem('completedInfo')) || [];

// Array for registered data
let user_record=new Array();
user_record=JSON.parse(localStorage.getItem("users"))?JSON.parse(localStorage.getItem("users")):[]
  

// DOM elements
const taskForm = document.querySelector('.form');
const taskList = document.querySelector('.task-list');
const completedTaskList = document.querySelector('.completed-task-list');

// Event listener for form submission
taskForm.addEventListener('submit',(e) =>{
    e.preventDefault();
 
    const email1 = document.querySelector('.task-email').value; 
    const title = document.querySelector('.task-title').value;
    const description = document.querySelector('.task-description').value;
    const dueDate = document.querySelector('.task-due-date').value;

    const task = {
	    email1,
        title,
        description,
        dueDate,
        completed: false
    };
   if(localStorage.getItem("email")==email1)
   {
    tasks.push(task);
    taskForm.reset();
    localStorage.setItem('taskInfo', JSON.stringify(tasks));
    displayTasks();
   }
   else
   {
	   alert("Please Enter Login Email");
    
   }
});

// Function to display tasks
function displayTasks(){
    taskList.innerHTML = '';
    tasks.forEach((task,index) => {
        const taskItem = document.createElement('div');
        taskItem.classList.add('task-item');

        taskItem.innerHTML = `
            <div class="task-info">
                <h3 class="task-name">${task.title}</h3>
                <p>${task.description}</p>
            </div>
            
            <div class="extra-info">
                <p>Due Date: ${task.dueDate}</p>

                <div>
                    <input type="checkbox" id="task-completed-${index}" ${task.completed ? 'checked' : ''}>
                    <label for="task-completed-${index}">Completed</label> 
                </div>
                
                <div class="info-buttons">
                    <button onclick="editTask(${index})">Edit</button>
                    <button onclick="deleteTask(${index})">Delete</button>
                </div>
            </div>
        `;

        taskList.appendChild(taskItem);

        //Event listner for checkbox change
        const checkbox = document.getElementById(`task-completed-${index}`);
        checkbox.addEventListener('change', () =>{
            tasks[index].completed = checkbox.checked;

            if(tasks[index].completed){
                // Move completed task to completedTasks array
                completedTasks.push(tasks[index]);
                tasks.splice(index, 1);
                localStorage.setItem('taskInfo', JSON.stringify(tasks));
                displayTasks();
                displayCompletedTasks();
            }
        });
    });
}
// Function to display completed tasks
function displayCompletedTasks(){
    completedTaskList.innerHTML = '';

    completedTasks.forEach((task,index) => {
        const taskItem = document.createElement('div');
        taskItem.classList.add('completed-task-item');

        taskItem.innerHTML = `
            <div class="completed-info">
                <h3>${task.title}</h3>
                <p>Due Date: ${task.dueDate}</p>
            </div>
            <p>${task.description}</p>

            <div class="completed-delete">
                <button onclick="deleteCompletedTask(${index})">Delete</button>
            </div>
        `;

        completedTaskList.appendChild(taskItem);
    });

    localStorage.setItem('completedInfo', JSON.stringify(completedTasks));
}

// Function to edit a task
function editTask(index){
    const updatedTitle = prompt('Enter updated title:', tasks[index].title);
    const updatedDescription = prompt('Enter updated description:', tasks[index].description);
    const updatedDueDate = prompt('Enter updated due date:', tasks[index].dueDate);

    if (updatedTitle !== null && updatedDescription !== null && updatedDueDate !== null) {
        tasks[index].title = updatedTitle;
        tasks[index].description = updatedDescription;
        tasks[index].dueDate = updatedDueDate;

        localStorage.setItem('taskInfo', JSON.stringify(tasks));
        displayTasks();
    }
}

// Function to delete a task
function deleteTask(index){
    tasks.splice(index,1);
    localStorage.setItem('taskInfo', JSON.stringify(tasks));
    displayTasks();
}

// Function to delete a completed task
function deleteCompletedTask(index){
    completedTasks.splice(index,1);
    localStorage.setItem('completedInfo', JSON.stringify(completedTasks));
    displayCompletedTasks();
}

// Initial display of tasks and completed task
   for(var p in completedTasks)
   {
      if(localStorage.getItem("email")==completedTasks[p].email1)
         {
             displayCompletedTasks();
         }
   }
     for(var p in tasks)
   {
if(localStorage.getItem("email")==tasks[p].email1)
{
displayTasks();
}
   }
//function for show and hide menubar
$(document).ready(function(){
	$("#crossbtn1").click(function(){
	    $("#divmenu").fadeIn(1000);
		$(this).css("display","none");
		$("#crossbtn2").css("display","block");
		});		
	$("#crossbtn2").click(function(){
	    $("#divmenu").fadeOut(1000);
		$("#crossbtn1").css("display","block");
		$(this).css("display","none");
		});
});

//function for logout
	function Logout()
	{
	  localStorage.removeItem("name");
	  localStorage.removeItem("email");
	  window.location.href="viewPage.html";
	}

/*
About e.preventDefault();
In HTML, when a form is submitted, the default behavior is to reload the page or navigate to a new 
URL specified in the form's action attribute. This is the standard behavior of HTML forms.

after calling e.preventDefault();, the JavaScript code proceeds to gather the user's input data from 
the form fields, create a task object, add it to the tasks array, and then update the display of tasks 
on the page—all without the page being refreshed or navigating to a different URL.
*/

/*
${task.completed ? 'checked' : ''}
If task.completed is true, the checked attribute is included in the HTML, which means the checkbox 
will be pre-checked. If task.completed is false, the checked attribute is omitted, and the checkbox 
will be unchecked.
*/