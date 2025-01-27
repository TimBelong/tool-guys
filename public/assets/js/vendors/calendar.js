const { Calendar } = require('@fullcalendar/core');
const dayGridPlugin = require('@fullcalendar/daygrid');

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    if (calendarEl) {
        const calendar = new Calendar(calendarEl, {
            plugins: [dayGridPlugin],
            initialView: 'dayGridMonth',
        });
        calendar.render();
    }
});
