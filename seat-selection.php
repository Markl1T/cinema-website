<?php
require("includes/header.php");
displayHeader(true, true, true);
?>
<main class="seat-selection-page">
    <div class="container">
        <div class="booking-info">
            <div class="movie-info-compact">
                <img src="/placeholder.svg?height=150&width=100" alt="Interstellar" class="movie-thumbnail">
                <div>
                    <h2>Interstellar</h2>
                    <p>Today at 7:30 PM • Screen 3 (IMAX)</p>
                </div>
            </div>
        </div>

        <div class="theater-layout">
            <div class="screen-container">
                <div class="screen">SCREEN</div>
            </div>

            <div class="seat-map-container">
                <div class="seat-map">
                    <div class="column-label empty-corner"></div>
                    <div class="column-labels">
                        <div class="column-label">1</div>
                        <div class="column-label">2</div>
                        <div class="column-label">3</div>
                        <div class="column-label">4</div>
                        <div class="column-label">5</div>
                        <div class="column-label">6</div>
                        <div class="column-label">7</div>
                        <div class="column-label">8</div>
                        <div class="column-label">9</div>
                        <div class="column-label">10</div>
                    </div>

                    <div class="row-label">A</div>
                    <div class="seat-row">
                        <div class="seat" data-row="A" data-seat="1"></div>
                        <div class="seat" data-row="A" data-seat="2"></div>
                        <div class="seat" data-row="A" data-seat="3"></div>
                        <div class="seat" data-row="A" data-seat="4"></div>
                        <div class="seat" data-row="A" data-seat="5"></div>
                        <div class="seat" data-row="A" data-seat="6"></div>
                        <div class="seat" data-row="A" data-seat="7"></div>
                        <div class="seat" data-row="A" data-seat="8"></div>
                        <div class="seat" data-row="A" data-seat="9"></div>
                        <div class="seat" data-row="A" data-seat="10"></div>
                    </div>

                    <div class="row-label">B</div>
                    <div class="seat-row">
                        <div class="seat" data-row="B" data-seat="1"></div>
                        <div class="seat" data-row="B" data-seat="2"></div>
                        <div class="seat occupied" data-row="B" data-seat="3"></div>
                        <div class="seat occupied" data-row="B" data-seat="4"></div>
                        <div class="seat" data-row="B" data-seat="5"></div>
                        <div class="seat" data-row="B" data-seat="6"></div>
                        <div class="seat" data-row="B" data-seat="7"></div>
                        <div class="seat" data-row="B" data-seat="8"></div>
                        <div class="seat" data-row="B" data-seat="9"></div>
                        <div class="seat" data-row="B" data-seat="10"></div>
                    </div>

                    <div class="row-label">C</div>
                    <div class="seat-row">
                        <div class="seat" data-row="C" data-seat="1"></div>
                        <div class="seat" data-row="C" data-seat="2"></div>
                        <div class="seat" data-row="C" data-seat="3"></div>
                        <div class="seat" data-row="C" data-seat="4"></div>
                        <div class="seat occupied" data-row="C" data-seat="5"></div>
                        <div class="seat occupied" data-row="C" data-seat="6"></div>
                        <div class="seat" data-row="C" data-seat="7"></div>
                        <div class="seat" data-row="C" data-seat="8"></div>
                        <div class="seat" data-row="C" data-seat="9"></div>
                        <div class="seat" data-row="C" data-seat="10"></div>
                    </div>

                    <div class="row-label">D</div>
                    <div class="seat-row">
                        <div class="seat" data-row="D" data-seat="1"></div>
                        <div class="seat" data-row="D" data-seat="2"></div>
                        <div class="seat" data-row="D" data-seat="3"></div>
                        <div class="seat" data-row="D" data-seat="4"></div>
                        <div class="seat" data-row="D" data-seat="5"></div>
                        <div class="seat" data-row="D" data-seat="6"></div>
                        <div class="seat occupied" data-row="D" data-seat="7"></div>
                        <div class="seat occupied" data-row="D" data-seat="8"></div>
                        <div class="seat" data-row="D" data-seat="9"></div>
                        <div class="seat" data-row="D" data-seat="10"></div>
                    </div>

                    <div class="row-label">E</div>
                    <div class="seat-row">
                        <div class="seat" data-row="E" data-seat="1"></div>
                        <div class="seat" data-row="E" data-seat="2"></div>
                        <div class="seat" data-row="E" data-seat="3"></div>
                        <div class="seat" data-row="E" data-seat="4"></div>
                        <div class="seat" data-row="E" data-seat="5"></div>
                        <div class="seat" data-row="E" data-seat="6"></div>
                        <div class="seat" data-row="E" data-seat="7"></div>
                        <div class="seat" data-row="E" data-seat="8"></div>
                        <div class="seat" data-row="E" data-seat="9"></div>
                        <div class="seat" data-row="E" data-seat="10"></div>
                    </div>

                    <div class="row-label">F</div>
                    <div class="seat-row">
                        <div class="seat" data-row="F" data-seat="1"></div>
                        <div class="seat" data-row="F" data-seat="2"></div>
                        <div class="seat occupied" data-row="F" data-seat="3"></div>
                        <div class="seat occupied" data-row="F" data-seat="4"></div>
                        <div class="seat" data-row="F" data-seat="5"></div>
                        <div class="seat" data-row="F" data-seat="6"></div>
                        <div class="seat" data-row="F" data-seat="7"></div>
                        <div class="seat" data-row="F" data-seat="8"></div>
                        <div class="seat" data-row="F" data-seat="9"></div>
                        <div class="seat" data-row="F" data-seat="10"></div>
                    </div>
                </div>
            </div>

            <div class="seat-legend">
                <div class="legend-item">
                    <div class="seat-sample"></div>
                    <span>Available</span>
                </div>
                <div class="legend-item">
                    <div class="seat-sample selected"></div>
                    <span>Selected</span>
                </div>
                <div class="legend-item">
                    <div class="seat-sample occupied"></div>
                    <span>Occupied</span>
                </div>
            </div>
        </div>

        <div class="booking-summary">
            <h3>Booking Summary</h3>
            <div class="summary-details">
                <div class="summary-row">
                    <span>Selected Seats:</span>
                    <span id="selected-seats">None</span>
                </div>
                <div class="summary-row">
                    <span>Total Seats:</span>
                    <span id="total-count">0</span>
                </div>
                <div class="summary-row total price">
                    <span>Total Price:</span>
                    <span id="total-price">$0.00</span>
                </div>
            </div>
            <button id="proceed-btn" class="btn-primary" disabled>Proceed to Payment</button>
        </div>
    </div>
</main>

<?php
require("includes/footer.php");
?>