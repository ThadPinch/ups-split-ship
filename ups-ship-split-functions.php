<?php

if (include_once(ABSPATH . '/wp-content/plugins/woocommerce-shipping-ups/includes/box-packer/class-wc-boxpack.php')) {

    function update_boxing($data) {

        $items_access = new \ReflectionProperty(WC_Boxpack::class, 'items');

        $items_access->setAccessible(true);

        $items = $items_access->getValue($data);

        $package_obj = $items;

        $data->clear_items();

        foreach ($package_obj as $package) {

            $weight = $package->weight;

            if (floatval($weight) < 60) {

                $data->add_item(
                    $package->length,
                    $package->width,
                    $package->height,
                    $package->weight,
                    $package->value
                );

            } else {

                $num_of_packages = ceil(floatval($weight)/60);
                
                $last_package = floatval($weight)%60;

                $x = 1;

                while($x <= $num_of_packages) {

                    if ($x == $num_of_packages) {
                        $pack_weight = $last_package;
                    } else {
                        $pack_weight = 60;
                    }

                    $data->add_item(
                        $package->length,
                        $package->width,
                        $package->height,
                        $pack_weight,
                        $package->value,
                    );

                    $x++;
                }

            }

        }

        return $data;
    }

    add_filter('woocommerce_shipping_ups_boxpack_before_pack', 'update_boxing', 1);

}
