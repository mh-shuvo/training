var generateRawTask = (task) =>{

    var title = `(${task.task_id})${task.title}`;
    var buttons = `<input type="checkbox" name="" id="" class="complete_checkbox" data-task_id="${task.task_id}">
                            <button type="button" class="edit_btn">
                                <i class="fa fa-edit"></i>
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
                            <button type="button" class="delete_btn">
                                <i class="fa fa-trash"></i>
                            </button>
                            
                        </div>
                    </div>
    `
}


const generateTaskList = ()=>{
    const taskListDiv = document.querySelector(".tasks")
    var rawTasks = "";

    data.forEach((item,key)=>{
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