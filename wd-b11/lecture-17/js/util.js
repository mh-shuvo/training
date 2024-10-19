var taskNo=2;
const form = document.querySelector("#task_create_form")
const TMS_TASKS_LOALSTORAGE_KEY = "TMS_TASKS";
const tasksElement = document.querySelector(".tasks");

const seedData = [
    {
        "task_id" : "T#01",
        "title"   : "Meeting with Akhilesh at 10:00AM",
        "description": "We will discuss about out upcoming CRM project.",
        "has_completed": false
    },
    {
        "task_id" : "T#02",
        "title"   : "Meeting with Akhilesh at 10:00AM",
        "description": "We will discuss about out upcoming CRM project.",
        "has_completed": true
    }
];
var data = [];

var getTasksFromLocalStorage = ()=>{
    const tasks = localStorage.getItem(TMS_TASKS_LOALSTORAGE_KEY) || null

    if(tasks != null){
        data = JSON.parse(tasks)
        return data;
    }
    return [];

}

var LoadTasks = ()=>{
    var html = "";

    const tasks = getTasksFromLocalStorage();

    if(tasks.length <= 0){
        html += "<p class='task-not-found'>Oops! No Task Found</p>";
    }else{
        tasks.forEach((item,key)=>{
            html += createTaskElement(item);
        })
    }
   
    
    tasksElement.innerHTML = html;

}


var createTaskElement = (task)=>{
    var title = `(${task.task_id})${task.title}`;
    var buttons = `<input type="checkbox" name="" id="" class="complete_checkbox" data-task-id="${task.task_id}">
                        <button type="button" class="edit_btn" data-task-id="${task.task_id}">
                            Edit
                        </button>`;

    if(task.has_completed){
        title = `<del>${title}</del>`
        buttons = '';
    }

    return `
                <div class="task">
                    <div>
                        <h3 class="task-title">${title}</h3>
                        <p class="task-description">${task.description} </p>
                    </div>
                    <div>
                        ${buttons}
                        <button type="button" class="delete_btn" data-task-id="${task.task_id}">
                            Delete
                        </button>
                        
                    </div>
                </div>
        `;
}
var validate = (input)=>{
    if(input.title == null || input.description == null){
        return false;
    }
    return true;
}


var resetForm = ()=>{
    const clearBtn = document.querySelector("#clear_btn")
    clearBtn.click()
    document.querySelector("#task_index").value = null
}


var generateTaskNo = (no)=>{
    return "T#"+no.toString().padStart(4,0);
}



var runSeeder = ()=>{
    const hasData = getTasksFromLocalStorage();

    if(hasData.length <= 0){
        localStorage.setItem(TMS_TASKS_LOALSTORAGE_KEY,JSON.stringify(seedData));
    }
}

var updateLocalStorage = ()=>{
    localStorage.setItem(TMS_TASKS_LOALSTORAGE_KEY,JSON.stringify(data));
}


// Find task index by task_id
const findTaskIndexById = (taskId) => {
    return data.findIndex((task) => task.task_id == taskId);
};

const markAsComplete = (id)=>{
    const index = findTaskIndexById(id)
    console.log(index)

    if(index >=0){
        data[index].has_completed = true;
        updateLocalStorage();
        LoadTasks();
        initializeEventListener();
    }
}

const editTask = (id)=>{
    const index = findTaskIndexById(id)

    if(index >=0){
        
        const item = data[index]
        document.querySelector("#title").value = item.title
        document.querySelector("#description").value = item.description
        document.querySelector("#task_index").value = index
    }
}

const deleteTask = (id)=>{
    const index = findTaskIndexById(id)
    console.log(data)
    const isConfirm = confirm("Are you sure?")
    if(index >=0 && isConfirm){
        data.splice(index,1)
        updateLocalStorage();
        LoadTasks();
        initializeEventListener();
    }
}


const showClock = ()=>{
    setInterval(()=>{
        const dt = new Date();
        const fullDt = `${dt.getDate()}/${dt.getMonth()}/${dt.getFullYear()} ${dt.getHours()}:${dt.getMinutes()}:${dt.getSeconds()}`
        document.querySelector("#clock").innerHTML = fullDt
    },1000)
}