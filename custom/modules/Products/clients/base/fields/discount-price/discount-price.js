/**
 * @class View.Fields.Base.DiscountPriceField
 * @alias SUGAR.App.view.fields.BaseDiscountPriceField
 * @extends View.Fields.Base.CurrencyField
 */
({
    extendsFrom: 'CurrencyField',
    filterState: null,
    stateFilters: null,
    /**
     * @inheritdoc
     */
    initialize: function (options) {
        this._super('initialize', [options]);

        this.events = _.extend({}, {
            'click .price_list': 'openPriceListSelection'
        }, this.events);
    },
    openPriceListSelection: function () {
        s1 = this;
        var product_id = this.model.get('product_template_id');
        if (_.isEmpty(product_id)) {
            app.alert.show(name, {
                level: 'error',
                messages: app.lang.get('ERR_PRICE_LIST_PRODUCT_EMPTY', 'Products')
            });

            return;
        }

        var dealer_id = this.model.get('account_id');
        if (_.isEmpty(dealer_id) && !_.isUndefined(this.context.parent)) {
            var parentModel = this.context.parent.get('model');
            if (!_.isUndefined(parentModel)) {
                dealer_id = parentModel.get('billing_account_id');
            }
        }
        var filterDefs = [{}];

        if (!_.isEmpty(dealer_id)) {
            filterDefs.push({
                'cetec_pricelist_accountsaccounts_ida': {
                    '$in': [dealer_id]
                }
            });
        }
       
        //to add manufacturer field into the filter of Price List
        var manufactrer_id = this.model.get('manufacturer_id');
        if (!_.isEmpty(manufactrer_id)) {
            filterDefs.push({
                'manufacturers_cetec_pricelist_1manufacturers_ida': {
                    '$in': [manufactrer_id]
                }
            });
        }
        
        //to add category field into the filter of Price List
        var category_id = this.model.get('category_id');
        if (!_.isEmpty(category_id)) {
            filterDefs.push({
                'productcategories_cetec_pricelist_1productcategories_ida': {
                    '$in': [category_id]
                }
            });
        }

        this.filterState = app.user.lastState.get('CETEC_Pricelist:filter:last-CETEC_Pricelist-records');
        this.stateFilters = app.user.lastState.get('CETEC_Pricelist:filter:edit-CETEC_Pricelist-records');

        app.user.lastState.set('CETEC_Pricelist:filter:last-CETEC_Pricelist-records', 'create');
        app.user.lastState.set('CETEC_Pricelist:filter:edit-CETEC_Pricelist-records', {
            'editable': true,
            'deleted': false,
            'filter_definition': filterDefs,
            'filter_template': filterDefs,
            'name': ''
        });

        app.drawer.open({
            layout: 'selection-list',
            context: {
                module: 'CETEC_Pricelist',
                fields: ['discount_price', 'cost_price', 'list_price', 'currency_id', 'base_rate'],
                filterOptions: {
                    stickiness: true,
                }
            }
        }, _.bind(this.setPrices, this));
    },
    setPrices: function (model) {
        app.user.lastState.set('CETEC_Pricelist:filter:last-CETEC_Pricelist-records', this.filterState);
        app.user.lastState.set('CETEC_Pricelist:filter:edit-CETEC_Pricelist-records', this.stateFilters);

        if (!model) {
            return;
        }


        this.model.set({
            'discount_price': model.discount_price,
            'cost_price': model.cost_price,
            'list_price': model.list_price,
            'currency_id': model.currency_id,
            'base_rate': model.base_rate,
        });

        this.model.trigger('change:discount_price');
    }
})
