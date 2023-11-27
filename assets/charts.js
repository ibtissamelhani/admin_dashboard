
// dougnut charts

const ctx = document.getElementById("myChart");
new Chart(ctx, {
  type: "doughnut",
  data: {
    labels: ["Action"],
    datasets: [
      {
        label: "# action",
        data: [67, 33],
        backgroundColor: [
          'rgb(52, 181, 58)',
          'transparent'
        ],
        borderWidth: 0.5,  
        cutout: '85%',
        borderRadius: 5      
      },
    ],
  },
});


const don1 = document.getElementById("myChart1");
new Chart(don1, {
  type: "doughnut",
  data: {
    labels: ["Comedy"],
    datasets: [
      {
        label: "# comedy",
        data: [46, 54],
        borderWidth: 1,
        backgroundColor: [
          'rgb(67, 57, 242)',
          'transparent'
        ],
        borderWidth: 0.5,  
        cutout: '85%',
        borderRadius: 5
      },
    ],
  },
});

const don2 = document.getElementById("myChart2");
new Chart(don2, {
  type: "doughnut",
  data: {
    labels: ["Horror"],
    datasets: [
      {
        label: "# Horror",
        data: [15, 85],
        borderWidth: 1,
        backgroundColor: [
          'rgb(255, 58, 41)',
          'transparent'
        ],
        borderWidth: 0.5, 
        cutout: '85%',
        borderRadius: 6
      },
    ],
  },
});

const don3 = document.getElementById("myChart3");
new Chart(don3, {
  type: "doughnut",
  data: {
    labels: ["Romance"],
    datasets: [
      {
        label: "# romance",
        data: [67, 33],
        borderWidth: 1,
        backgroundColor: [
          'rgb(2, 160, 252)',
          'transparent'
        ],
        borderWidth: 0.5, 
        cutout: '85%',
        borderRadius: 6
      },
    ],
  },
});


// line charts

const line = document.getElementById("lineChart");
new Chart(line, {
  type: "line",
  data: {
    labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN"],
    datasets: [
      {
        label: "Total Watch Time",
        data: [12, 19, 3, 5, 2, 3],
        borderColor:'rgb(242,235,39)',
        borderWidth: 1,
      
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

// bar chart

const bar = document.getElementById("barChart");
new Chart(bar, {
  type: "bar",
  data: {
    labels: ["Movies", "Series"],
    datasets: [
      {
        label: "Number of Movies/Series Watched",
        data: [10, 15],
        backgroundColor: [
          'rgb(59, 39, 242)',
          'rgb(242,39,39)'
        ],
        borderWidth: 1,
        borderRadius: 6,
        maxBarThickness: 20
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

// swiper
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
