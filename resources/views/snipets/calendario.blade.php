<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

.calendar{
    width: 437px;
    padding:1rem;
    background-color: rgb(240, 242, 245);
    font-family: Arial, sans-serif;
    border-radius: 5px;
    box-shadow: 0 10px 29px -7px rgba(63,63,63,0.48);
}

.calendar-header{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.calendar-header button{
    background: linear-gradient(90deg,rgba(43, 173, 224, 1) 0%, rgba(129, 178, 227, 1) 99%);
    border: none;
    cursor: pointer;
    font-size: 18px;
}

.calendar-body{
    display: grid;
    grid-template-columns: repeat(7,1fr);
}

.calendar__name__days{
    display:grid;
    grid-template-columns: repeat(7,1fr);
}

.day__name{
    font-family:lato;
    font-size:1.5rem;
    font-weight:600;
    margin:5px;
    padding:10px;
}

.calendar-day{
    font-size:1.2rem;
    border-radius: 10%;
    padding: 10px;
    margin: 5px;
    text-align: center;
    cursor: pointer;
}

.calendar-day:hover{
    background-color: #ddd !important;
    transition: background-color 0.3s ease;
}

.calendar-day.selected{
    background: linear-gradient(90deg,rgba(43, 173, 224, 1) 0%, rgba(141, 179, 217, 1) 69%);;
}

.calendar-day.range{
    background-color: #BDDDFC;
}

#prevBtn, #nextBtn{
    width: 40px;
    height: 40px;
    padding: 10px;
    margin: 0 10px 0 10px;
    border-radius: 50%;
    background-color: #fff;
}

#prevBtn:hover{
    background-color: #ddd !important;
    transition: background-color 0.3s ease;
}

#nextBtn:hover{
    background-color: #ddd !important;
    transition: background-color 0.3s ease;
}

#selectedDates{
    font-family: 'Poppins';
}

#currentMonth{
    font-family: 'lato';
    font-size: 2rem;
}

@media screen and (max-width:600px){
    .calendar{
    max-width: 300px;
    padding:.5rem;
    }
    
    .calendar-header button{
    font-size: 10px;
}

.day__name{
    font-family:lato;
    font-size:1rem;
    font-weight:600;
    margin:2px;
    padding:8px;
}
.calendar-day{
    font-size:1rem;
    border-radius: 10%;
    padding: 8px;
    margin: 2px;
    text-align: center;
    cursor: pointer;
}

}
</style>
<body>
    <!-- <h3 id="selectedDates">Fechas seleccionadas:</h3> -->
    <div class="calendar">
        <div class="calendar-header">
            <h2 id="currentMonth"></h2>
           <div class="calendar__month__controls">
                <button id="prevBtn" class="calendar-btn"><i class="fas fa-angle-left"></i></button>
                <button id="nextBtn" class="calendar-btn"><i class="fas fa-angle-right"></i></button>
           </div>
        </div>
        <hr>
        <div class="calendar__name__days">
            <div class="day__name">
                Mon
            </div>
            <div class="day__name">
                Tu
            </div>
            <div class="day__name">
                We
            </div>
            <div class="day__name">
                Th
            </div>
            <div class="day__name">
                Fr
            </div>
            <div class="day__name">
                Sa
            </div>
            <div class="day__name">
                Su
            </div>
        </div>
        <div id="calendarBody" class="calendar-body"></div>
    </div>
    <script>
        const currentDate = new Date();
        let currentMonth = currentDate.getMonth();
        let currentYear = currentDate.getFullYear();
        let startDate = null;
        let endDate = null;

        const calendarBody = document.getElementById('calendarBody');
        const currentMonthElement = document.getElementById('currentMonth');
        const selectedDatesElement = document.getElementById('selectedDates');

        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        prevBtn.addEventListener('click',()=>{
            currentMonth--;
            renderCalendar();
        });
        nextBtn.addEventListener('click',()=>{
            currentMonth++;
            renderCalendar();
        });

        function renderCalendar(){
            const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
            const firstDayIndex = new Date(currentYear, currentMonth, 1).getDay();

            currentMonthElement.textContent = new Date(currentYear, currentMonth).toLocaleDateString('default',{month: 'long', year: 'numeric'});

            let days = '';

            for (let i = 1; i <= firstDayIndex; i++) {
                days += `<div class="calendar-day"></div>`;
            }

            for (let i = 1; i <= daysInMonth; i++) {
                const date = new Date(currentYear, currentMonth, i);
                const className = getDayClassName(date);
                days += `<div class="calendar-day ${className}" onclick="selectDate(${i})">${i}</div>`;
            }

            calendarBody.innerHTML = days;
        }

        function selectDate(day){
            const clickedDate = new Date(currentYear, currentMonth, day);
            if (!startDate || endDate){
                startDate = clickedDate;
                endDate = null;
            } else if (clickedDate < startDate){
                startDate = clickedDate;
            } else if (clickedDate > startDate){
                endDate = clickedDate;
            }

            renderCalendar();
            updateSelectedDates();
        }

        function updateSelectedDates(){
            if(startDate && endDate){
                selectedDatesElement.textContent = `Fechas seleccionadas: ${formatDate(startDate)} - ${formatDate(endDate)}`;
            } else if (startDate){
                selectedDatesElement.textContent = `Fechas seleccionadas: ${formatDate(startDate)}`;
            } else {
                selectedDatesElement.textContent = `Fechas seleccionadas:`;
            }
        }

        function getDayClassName(date){
            if (startDate && date.toDateString() === startDate.toDateString()){
                return 'selected';
            }
            if (endDate && date.toDateString() === endDate.toDateString()){
                return 'selected';
            }
            if (startDate && endDate && date > startDate && date < endDate){
                return 'range';
            }
            return '';
        }

        function formatDate(date){
            return `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`;
        }

        renderCalendar();
        updateSelectedDates();
    </script>