let cart = JSON.parse(localStorage.getItem('cart')) || [];
let total = 0;

function addToCart(name, price) {
    cart.push({ name, price });
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(name + ' added to cart!');
}

function loadCart() {
    const cartItems = document.getElementById('cartItems');
    const totalElement = document.getElementById('total');

    cartItems.innerHTML = '';
    total = 0;

    cart.forEach((item, index) => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - ₹${item.price}`;
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.onclick = () => {
            removeFromCart(index);
        };
        li.appendChild(removeButton);
        cartItems.appendChild(li);
        total += item.price;
    });

    totalElement.textContent = total.toFixed(2);
}

function removeFromCart(index) {
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

function checkout() {
    alert('Proceeding to checkout with total: ₹' + total.toFixed(2));
    window.location.href = 'payment.php';
}

document.addEventListener('DOMContentLoaded', loadCart);
