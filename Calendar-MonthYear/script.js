function generateCalendar(year, month) {
    const daysInWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const firstDay = new Date(year, month, 1).getDay();

    
    const monthYear = document.getElementById('monthYear');
    monthYear.textContent = `${monthNames[month]} ${year}`;

    // Create table
    const table = document.createElement('table');
    const headerRow = document.createElement('tr');

    
    daysInWeek.forEach(day => {
        const th = document.createElement('th');
        th.textContent = day;
        headerRow.appendChild(th);
    });
    table.appendChild(headerRow);

    
    let date = 1;
    for (let i = 0; i < 6; i++) {
        const row = document.createElement('tr');
        for (let j = 0; j < 7; j++) {
            const cell = document.createElement('td');
            if (i === 0 && j < firstDay || date > daysInMonth) {
                cell.classList.add('empty');
                cell.textContent = '';
            } else {
                cell.textContent = date;
                date++;
            }
            row.appendChild(cell);
        }
        table.appendChild(row);
        if (date > daysInMonth) break; 
    }

    // Display table
    const calendarDiv = document.getElementById('calendar');
    calendarDiv.innerHTML = ''; 
    calendarDiv.appendChild(monthYear);
    calendarDiv.appendChild(table);
}

document.getElementById('searchButton').addEventListener('click', () => {
    const year = parseInt(document.getElementById('year').value, 10);
    const month = parseInt(document.getElementById('month').value, 10) - 1;

    if (!isNaN(year) && !isNaN(month) && month >= 0 && month <= 11) {
        generateCalendar(year, month);
    } else {
        alert("Invalid input. Please enter a valid year and month.");
    }
});
