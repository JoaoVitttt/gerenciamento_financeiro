<!-- CARD  -->
<div class="main-title">
    <p class="font-weight-bold">DASHBOARD</p>
</div>

<div class="main-cards">

    <div class="card">
        <div class="card-inner">
            <p class="text-primary">Entradas:</p>
            <span class="material-icons-outlined text-blue">inventory_2</span>
        </div>
        <span class="text-primary font-weight-bold">+ R$0.00</span>
    </div>

    <div class="card">
        <div class="card-inner">
            <p class="text-primary">Saídas:</p>
            <span class="material-icons-outlined text-orange">add_shopping_cart</span>
        </div>
        <span class="text-primary font-weight-bold">- R$0.00</span>
    </div>

    <div class="card">
        <div class="card-inner">
            <p class="text-primary">Divida:</p>
            <span class="material-icons-outlined text-green">shopping_cart</span>
        </div>
        <span class="text-primary font-weight-bold">- R$0.00</span>
    </div>

    <div class="card">
        <div class="card-inner">
            <p class="text-primary">Total:</p>
            <span class="material-icons-outlined text-red">notification_important</span>
        </div>
        <span class="text-primary font-weight-bold">R$0.00</span>
    </div>

</div>

<!-- INSERT-->
<div class="newItem">
    <div class="divDesc">
        <label for="desc">Descrição</label>
        <input autofocus type="text" id="desc" />
    </div>
    <div class="divAmount">
        <label for="amount">Valor</label>
        <input type="number" id="amount" />
    </div>
    <div class="divAmount">
        <label for="amount">Vencimento</label>
        <input type="date" id="amount" />
    </div>
    <div class="divType">
        <label for="type">Tipo</label>
        <select id="type">
            <option>Entrada</option>
            <option>Saída</option>
        </select>
    </div>
    <button id="btnNew">Incluir</button>
</div>

<div class="divTable">
    <table>
        <thead>
            <tr>
            <th>Descrição</th>
            <th class="columnAmount">Valor</th>
            <th class="columnAmount">Vencimento</th>
            <th class="columnType">Tipo</th>
            <th class="columnAction"></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<!-- CHART -->
<div class="charts">
    <div class="charts-card">
        <p class="charts-title">Revenue vs Profit</p>
        <div id="bar-chart"></div>
    </div>

    <div class="charts-card">
        <p class="charts-title">Purchase and Sales Orders</p>
        <div id="area-chart"></div>
    </div>
</div>

