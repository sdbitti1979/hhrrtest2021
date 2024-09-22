let invoices = [
    {
        customer: {
            name: "Coca Cola",
            type: "B2B"
        },
        paid: false,
        items: [
            { subtotal: 1234.44, description: 'asdfg' },
            { subtotal: 5678.88, description: 'qwerty' }
        ]
    },
    {
        customer: {
            name: "Juan Perez",
            type: "B2C"
        },
        paid: false,
        items: [
            { subtotal: 5556.54, description: 'asdfg' },
            { subtotal: 9632.21, description: 'qwerty' }
        ]
    },
    {
        customer: {
            name: "John Smith",
            type: "B2C"
        },
        paid: true,
        items: [
            { subtotal: 1234.44, description: 'asdfg' },
            { subtotal: 5678.88, description: 'qwerty' }
        ]
    },
    {
        customer: {
            name: "Esteban Quito",
            type: "B2C"
        },
        paid: false,
        items: [
            { subtotal: 895.7, description: 'asdfg' },
            { subtotal: 8542.34, description: 'qwerty' },
            { subtotal: 9674.95, description: 'qwerty' }
        ]
    }
];

//console.log(invoices[0].items[0].subtotal);


let totalAdeudado = invoices
    //filtra las facturas no pagadas
    .filter(invoices => !invoices.paid)
    //recorre cada ítem y va calculando el todal de facturas adeudadas
    .reduce((acumulado, invoices) => {
        let tipoCliente = invoices.customer.type
        let totalFactura = invoices.items.reduce((acumulado, item) => acumulado + item.subtotal, 0);

        acumulado[tipoCliente] = (acumulado[tipoCliente] || 0) + totalFactura;

        return acumulado;
    }, {});



console.log(totalAdeudado);