
    /* =====================================
            Coming Soon Count Down
    ====================================== */
    let countDown = $(".count_down");
    if (countDown.length) {
        countDown.downCount({
            // month / day / Year
            date: '2/21/2021 12:00:00',
            offset: +10
        });
    }