
({
    extendsFrom: 'PanelTopView',
    initialize: function (options) {
        this._super('initialize', [options]);
    },
    createRelatedClicked: function (event) {
        this.customopenDrawer(this.module, 'cetec_demos_cetec_demo_products');
    },
    customopenDrawer: function (module, link) {
        var proto = Object.getPrototypeOf(this);
        if (_.isFunction(proto.openCreateDrawer)) {
            return proto.openCreateDrawer.call(this, module, link);
        }
        link = link || this.context.get('link');
        var context = (this.context.get('name') === 'tabbed-dashlet') ?
                this.context : (this.context.parent || this.context);
        var parentModel = context.get('model') || context.parent.get('model'),
                model = this.createLinkModel(parentModel, link),
                self = this;
        model.set('issue_location_c', parentModel.get('location_c'));
        app.drawer.open({
            layout: 'create',
            context: {
                create: true,
                module: model.module,
                model: model
            }
        }, function (context, model) {
            if (!model) {
                return;
            }

            self.trigger('linked-model:create', model);
        });
    },
})