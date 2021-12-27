<div>
    <form action="{{ route('send') }}" method="post">
        @csrf
        <div class="currency-calculator mb-15 clearfix">
            <div class="d-flex align-items-center justify-content-center">
                <!-- Calculator Part -->
                <div class="calculator-first-part d-flex align-items-center">
                    <input type="number" name="valueFrom" placeholder="Отдаете" wire:model="valueFrom">
                    <select name="typeFrom" wire:model="typeFrom">
                        <option value="BTC">BTC</option>
                        <option value="ETH">ETH</option>
                        <option value="USDt (ERC-20)">USDt (ERC-20)</option>
                        <option value="USDt (TRC-20)">USDt (TRC-20)</option>
                        <option value="Альфабанк RUB">Альфабанк RUB</option>
                        <option value="Тинькофф RUB">Тинькофф RUB</option>
                        <option value="Сбербанк RUB">Сбербанк RUB</option>
                        <option value="ВТБ RUB">ВТБ RUB</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="currency-calculator mb-15">
            <div class="d-flex align-items-center justify-content-center">
                <!-- Calculator Part -->
                <div class="calculator-first-part d-flex align-items-center">
                    <input @if($valueTo == null) class="is-invalid"@endif type="text" name="valueTo" placeholder="Получаете" wire:model="valueTo" required @if($valueTo == null) disabled @endif >
                    <select name="typeTo" wire:model="typeTo">
                        <option value="Альфабанк RUB">Альфабанк RUB</option>
                        <option value="Тинькофф RUB">Тинькофф RUB</option>
                        <option value="Сбербанк RUB">Сбербанк RUB</option>
                        <option value="ВТБ RUB">ВТБ RUB</option>
                        <option value="BTC">BTC</option>
                        <option value="ETH">ETH</option>
                        <option value="USDt (ERC-20)">USDt (ERC-20)</option>
                        <option value="USDt (TRC-20)">USDt (TRC-20)</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="currency-calculator mb-15">
            <div class="d-flex align-items-center justify-content-center">
                <!-- Calculator Part -->
                <div class="calculator-first-part d-flex">
                    <input type="text" name="wallet" style="width: 420px" placeholder="Адрес кошелька">
                </div>
            </div>
        </div>

        <div class="currency-calculator mb-15">
            <div class="d-flex align-items-center justify-content-center">
                <!-- Calculator Part -->
                <div class="calculator-first-part d-flex">
                    <input type="text" name="firstName" placeholder="Ваше имя">
                </div>
            </div>
        </div>
        <div class="currency-calculator mb-15">
            <div class="d-flex align-items-center justify-content-center">
                <!-- Calculator Part -->
                <div class="calculator-first-part d-flex">
                    <input type="tel" name="phone" placeholder="Ваш телефон">
                </div>
            </div>
        </div>
        <div class="currency-calculator mb-15">
            <div class="d-flex align-items-center justify-content-center">
                <!-- Calculator Part -->
                <div class="calculator-first-part d-flex">
                    <input type="email" name="email" placeholder="Ваш e-mail">
                </div>
            </div>
        </div>
        <div class="currency-calculator mb-15">
            <div class="d-flex align-items-center justify-content-center">
                <!-- Calculator Part -->
                <div class="calculator-first-part d-flex">
                    <button type="submit" class="btn cryptos-btn">Создать заявку</button>
                </div>
            </div>
        </div>
    </form>
</div>
