/*
// Author: Daniel Clayton
// Start: Execute this script in PhpMyAdmin or another SQL server to install the database for this website.
// Description: This file creates the database and user utilized by Nordic.
// Info: root user, no password,
*/

DROP DATABASE IF EXISTS Nordic_Site_DB;
CREATE DATABASE Nordic_Site_DB;
USE Nordic_Site_DB;

CREATE TABLE beverage (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    short_form VARCHAR(50) NOT NULL,
    type VARCHAR(50) NOT NULL,
    image VARCHAR(100) NOT NULL,
    description TEXT(1000) NOT NULL,
    tasting_notes TEXT(1000) NOT NULL,
    pairing_suggestions TEXT(1000) NOT NULL,
    price FLOAT NOT NULL
);

INSERT INTO beverage (name, short_form, type, image, description, tasting_notes, pairing_suggestions, price)
VALUES  ('Berserker Ale', 'br', 'ale', 'berserker.png', 'Unleash the warrior within with Berserker Ale, a brew inspired by the legendary Norse warriors known for their fierce battle frenzy. Crafted with the finest ingredients and an unyielding spirit, this ale captures the essence of the Berserker''s raw power and untamed energy.', 'Berserker Ale boasts a robust and bold flavor profile that mirrors the strength and intensity of its namesake. With a deep amber hue, this ale offers a perfect balance of rich maltiness and hoppy bitterness. Notes of caramel and toasted grains blend seamlessly with hints of pine and citrus, creating a complex and satisfying drinking experience. Each sip delivers a powerful punch, much like the mighty Berserkers themselves.', 'Enjoy Berserker Ale with hearty meals such as roasted meats, spicy sausages, and aged cheeses. Its full-bodied flavor also pairs wonderfully with traditional Nordic dishes, enhancing the rich, savory flavors of the cuisine.', '12.99'),
        ('Vikingr Brew', 'vk', 'ale', 'vikingr-brew.png', 'Embark on a journey of epic proportions with Vikingr Ale, a brew that pays homage to the fearless Norse explorers and warriors. Crafted with meticulous care and inspired by the adventurous spirit of the Vikings, this ale is a tribute to their enduring legacy and legendary feats.', 'Vikingr Ale features a rich golden hue and a well-balanced flavor profile that is both refreshing and complex. The initial taste reveals a harmonious blend of malt sweetness and subtle hop bitterness, followed by hints of honey and wild herbs that evoke the rugged landscapes of the North. A crisp, clean finish ensures that each sip is as invigorating as the last, embodying the essence of Viking courage and resilience.', 'Vikingr Ale pairs perfectly with traditional Nordic fare such as smoked salmon, roasted game, and hearty stews. It also complements modern dishes like grilled meats and seafood, making it a versatile choice for any meal.', '10.99'),
        ('Valkyra Mead', 'vy', 'mead', 'valkyra.png', 'Step into the world of ancient Norse legends with Valkyra Mead, a divine elixir inspired by the Valkyries, the celestial maidens who chose the bravest warriors for Valhalla. Crafted with the finest honey and infused with a blend of aromatic spices, this mead embodies the enchanting allure and mystical power of the Valkyries.', 'Valkyra Mead offers a golden, amber hue and a luxurious, smooth texture. The first sip reveals a harmonious sweetness from pure honey, complemented by delicate floral notes and a hint of vanilla. As the flavors unfold, a subtle warmth from the spices emerges, leaving a lingering, pleasantly complex finish that is both refreshing and satisfying. Each taste transports you to the mythical halls of Valhalla.', 'Valkyra Mead pairs exquisitely with both savory and sweet dishes. Enjoy it with roasted poultry, glazed ham, or smoked cheeses to enhance the mead’s honeyed notes. For a delightful dessert pairing, try it with fruit tarts, spiced cakes, or dark chocolate.', '16.99');
