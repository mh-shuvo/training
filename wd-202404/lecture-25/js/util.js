const seed = [
    {
        "task_id":"T#01",
        "title":"Meeting with Akhilesh at 10:00AM",
        "description":"We will discuss about out upcoming CRM project.",
        "has_completed":false,
    },
    {
        "task_id":"T#02",
        "title":"Requirement Analysis with Team Lead",
        "description":"We will discuss about out upcoming CRM project requirement.",
        "has_completed":true,
    },
    {
        "task_id":"T#03",
        "title":"Lunch Hour",
        "description":"Take Healthy Lunch",
        "has_completed":false,
    }
];

var data = [];

var generateRawTask = (task) =>{

    var title = `(${task.task_id})${task.title}`;
    var buttons = `<input type="checkbox" name="" id="" class="complete_checkbox" data-task_id="${task.task_id}">
                            <button type="button" class="edit_btn fa fa-edit" data-task_id="${task.task_id}">
                            </button>`;

    if(task.has_completed){
        title = `<del>${title}</del>`
        buttons = ``
    }

    return `
                <div class="task">
                        <div>
                            <h3 class="task-title">${title}</h3>
                            <p class="task-description">${task.description} </p>
                        </div>
                        <div>
                            ${buttons}
                            <button type="button" class="delete_btn fa fa-trash" data-task_id="${task.task_id}"></button>
                            
                        </div>
                    </div>
    `
}


var getTasksFromLocalStorage = ()=>{
    const tasks = localStorage.getItem("TMS_DATA") || null

    if(tasks != null){
        data = JSON.parse(tasks)
        return data;
    }
    return [];

}


const generateTaskList = ()=>{
    const taskListDiv = document.querySelector(".tasks")
    var rawTasks = "";

    const allTasks = getTasksFromLocalStorage();

    allTasks.forEach((item,key)=>{
        rawTasks+=generateRawTask(item);
    })

    taskListDiv.innerHTML = rawTasks
}


const validateInputData = (data)=>{
    var hasFillEverything = true;

    if(data.title.trim() == null || data.title.trim() == ""){
        hasFillEverything = false
    }

    if(data.description.trim() == null || data.description.trim() == ""){
        hasFillEverything = false
    }

    return hasFillEverything;
}

const refreshTaskList = ()=>{
    generateTaskList();
}

const findTaskIndexById = (id)=>{
    return data.findIndex((task) => task.task_id == id)
}

const runSeeder = ()=>{
    const hasSeed = localStorage.getItem("TMS_DATA") || false;
    if(!hasSeed){
        localStorage.setItem("TMS_DATA",JSON.stringify(seed))
    }
}

const updateLocalStorage = ()=>{
    localStorage.setItem("TMS_DATA",JSON.stringify(data))
}

const markAsCompleteTask = (id)=>{
    const taskIndex = findTaskIndexById(id)
    if(taskIndex>=0){
        data[taskIndex].has_completed = true;
        updateLocalStorage();
        generateTaskList();
        initializeEventListeners();
    }    
}

const removeTask = (id)=>{
    const taskIndex = findTaskIndexById(id)
    const isConfirm = confirm("Are you sure?")
    if(taskIndex >= 0 && isConfirm){
        data.splice(taskIndex,1);
        updateLocalStorage();
        generateTaskList();
        initializeEventListeners();
    }
}
const editTask = (id)=>{
    const taskIndex = findTaskIndexById(id)
    if(taskIndex >= 0){
        const task = data[taskIndex]
        document.querySelector("#title").value = task.title
        document.querySelector("#description").value = task.description
        document.querySelector("#task_index").value = taskIndex
    }
}

const showClock = ()=>{
    setInterval(()=>{
        const dt = new Date();
        const clock = `${dt.getDate()}-${dt.getMonth()}-${dt.getFullYear()} ${dt.getHours()}:${dt.getMinutes()}:${dt.getSeconds()}`;
        document.querySelector("#clock").innerHTML = clock
    },1000)
}