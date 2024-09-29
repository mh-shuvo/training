const form = document.querySelector("#task_create_form");
form.addEventListener("submit",()=>{
    const title = document.querySelector("#title").value
    const description = document.querySelector("#description").value
    const index = document.querySelector("#task_index").value || null
    
    
    const inputDataJson = {
        "task_id":`T#${Date.now()}`,
        "title" : title,
        "description" : description,
        "has_completed":false
    }
    const validate = validateInputData(inputDataJson)

    if(!validate){
        alert("Check your input data.");
        return false;
    }

    if(index != null && index >= 0){
        inputDataJson.task_id = data[index].task_id
        data[index] = inputDataJson
    }else{
        data.push(inputDataJson)
    }

    updateLocalStorage();
    generateTaskList();
    initializeEventListeners();
    document.querySelector("#clear_btn").click()
    document.querySelector("#task_index").value = null
})

const initializeEventListeners = ()=>{
    const chkBox = document.querySelectorAll(".complete_checkbox")

    chkBox.forEach((el,key)=>{
        el.addEventListener("click",(event)=>{
            const clickedBoxElement = event.target;
            if(clickedBoxElement.checked){
                const task_id = clickedBoxElement.getAttribute("data-task_id") || null
                markAsCompleteTask(task_id)
            }
        })
    });

    document.querySelectorAll(".delete_btn").forEach((el,key)=>{
        el.addEventListener("click",(event)=>{
            const clickedBoxElement = event.target;
            const task_id = clickedBoxElement.getAttribute("data-task_id") || null
            removeTask(task_id)
        })
    });
    
    document.querySelectorAll(".edit_btn").forEach((el,key)=>{
        el.addEventListener("click",(event)=>{
            const clickedBoxElement = event.target;
            const task_id = clickedBoxElement.getAttribute("data-task_id") || null
            editTask(task_id)
        })
    });

}
window.addEventListener('load',()=>{
    runSeeder();
    generateTaskList();
    initializeEventListeners();
    showClock();

    
})

/**
 * setTimeout
 * setInterval
 */

