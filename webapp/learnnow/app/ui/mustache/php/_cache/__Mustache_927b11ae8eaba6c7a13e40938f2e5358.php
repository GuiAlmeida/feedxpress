<?php

class __Mustache_927b11ae8eaba6c7a13e40938f2e5358 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form class="form-horizontal" role="form">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">';
        $buffer .= "\n";
        $buffer .= $indent . '			Text Field';
        $buffer .= "\n";
        $buffer .= $indent . '		</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="space-4"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-2">';
        $buffer .= "\n";
        $buffer .= $indent . '			Password Field';
        $buffer .= "\n";
        $buffer .= $indent . '		</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<span class="help-inline col-xs-12 col-sm-7">';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="middle">Inline help text</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</span>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="space-4"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">';
        $buffer .= "\n";
        $buffer .= $indent . '			Readonly field';
        $buffer .= "\n";
        $buffer .= $indent . '		</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input readonly type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<span class="help-inline col-xs-12 col-sm-7">';
        $buffer .= "\n";
        $buffer .= $indent . '				<label class="middle">';
        $buffer .= "\n";
        $buffer .= $indent . '					<input class="ace" type="checkbox" id="id-disable-check" />';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="lbl"> Disable it!</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			</span>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="space-4"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Relative Sizing</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input class="input-sm" type="text" id="form-field-4" placeholder=".input-sm">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="space-2"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="help-block" id="input-size-slider"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Grid Sizing</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="clearfix">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input class="col-xs-1" type="text" id="form-field-5" placeholder=".col-xs-1">';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="space-2"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="help-block" id="input-span-slider"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right">Input with Icon</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			<span class="input-icon">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="text" id="form-field-icon-1">';
        $buffer .= "\n";
        $buffer .= $indent . '				<i class="icon-leaf blue"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '			</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '			<span class="input-icon input-icon-right">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="text" id="form-field-icon-2">';
        $buffer .= "\n";
        $buffer .= $indent . '				<i class="icon-leaf green"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '			</span>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="space-4"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Tooltip and help button</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="space-4"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right"  for="form-field-tags">Tag input</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			 <input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." />';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="clearfix form-actions">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-md-offset-3 col-md-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			<button class="btn btn-info" type="button"><i class="icon-ok bigger-110"></i> Submit</button>';
        $buffer .= "\n";
        $buffer .= $indent . '			&nbsp; &nbsp; &nbsp;';
        $buffer .= "\n";
        $buffer .= $indent . '			<button class="btn" type="reset"><i class="icon-undo bigger-110"></i> Reset</button>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="hr hr-24"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="col-xs-12 col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4>Text Area</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-toolbar">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '			 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-8">Default</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-9">With Character Limit</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<textarea class="form-control limited" id="form-field-9" maxlength="50"></textarea>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-11">Autosize</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<textarea id="form-field-11" class="autosize-transition form-control"></textarea>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div><!--/span-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="col-xs-12 col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4>Masked Input</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="widget-toolbar">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="settings"><i class="icon-cog"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '			 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-mask-1">Date <small class="text-success">99/99/9999</small></label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="input-group">';
        $buffer .= "\n";
        $buffer .= $indent . '						<input class="form-control input-mask-date" type="text" id="form-field-mask-1" />';
        $buffer .= "\n";
        $buffer .= $indent . '						<span class="input-group-btn">';
        $buffer .= "\n";
        $buffer .= $indent . '							<button class="btn btn-sm btn-default" type="button"><i class="icon-calendar bigger-110"></i> Go!</button>';
        $buffer .= "\n";
        $buffer .= $indent . '						</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-mask-2">Phone <small class="text-warning">(999) 999-9999</small></label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="input-group">';
        $buffer .= "\n";
        $buffer .= $indent . '						<span class="input-group-addon"><i class="icon-phone"></i></span>';
        $buffer .= "\n";
        $buffer .= $indent . '						<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" />';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-mask-3">Product Key <small class="text-error">a*-999-a999</small></label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="input-group">';
        $buffer .= "\n";
        $buffer .= $indent . '						<input class="form-control input-mask-product" type="text" id="form-field-mask-3" />';
        $buffer .= "\n";
        $buffer .= $indent . '						<span class="input-group-addon"><i class="icon-key"></i></span>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-mask-4">Eye Script <small class="text-info">~9.99 ~9.99 999</small></label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<input class="input-medium input-mask-eyescript" type="text" id="form-field-mask-4" />';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div><!--/span-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="col-xs-12 col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4>Select Box</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="widget-toolbar">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="settings"><i class="icon-cog"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '			 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-select-1">Default</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<select class="form-control" id="form-field-select-1">';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="">&nbsp;</option>';
        $buffer .= "\n";
        // 'page.states' section
        $buffer .= $this->sectionBad5c6996822ab0a7ef5abef84a13847($context, $indent, $context->findDot('page.states'));
        $buffer .= $indent . '					</select>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-select-2">Multiple</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<select class="form-control" id="form-field-select-2" multiple="multiple">';
        $buffer .= "\n";
        // 'page.states' section
        $buffer .= $this->sectionDaed8b0a2479f413c3876988777b909f($context, $indent, $context->findDot('page.states'));
        $buffer .= $indent . '					</select>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-select-3">Chosen</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<br />';
        $buffer .= "\n";
        $buffer .= $indent . '					<select class="width-80 chosen-select" id="form-field-select-3" data-placeholder="Choose a Country...">';
        $buffer .= "\n";
        $buffer .= $indent . '						 <option value="">&nbsp;</option>';
        $buffer .= "\n";
        // 'page.states' section
        $buffer .= $this->sectionF877aa7a1eedbac8a9093ea1e7bd2c70($context, $indent, $context->findDot('page.states'));
        $buffer .= $indent . '					</select>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '				<div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '							<span class="bigger-110">Multiple</span>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div><!--/span-->';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '							<span class="pull-right inline">';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="grey">style:</span>';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="btn-toolbar inline middle no-margin">';
        $buffer .= "\n";
        $buffer .= $indent . '									<span id="chosen-multiple-style" data-toggle="buttons" class="btn-group no-margin">';
        $buffer .= "\n";
        $buffer .= $indent . '										<label class="btn btn-xs btn-yellow active">';
        $buffer .= "\n";
        $buffer .= $indent . '											1';
        $buffer .= "\n";
        $buffer .= $indent . '											<input type="radio" value="1" />';
        $buffer .= "\n";
        $buffer .= $indent . '										</label>';
        $buffer .= "\n";
        $buffer .= $indent . '										<label class="btn btn-xs btn-yellow">';
        $buffer .= "\n";
        $buffer .= $indent . '											2';
        $buffer .= "\n";
        $buffer .= $indent . '											<input type="radio" value="2" />';
        $buffer .= "\n";
        $buffer .= $indent . '										</label>';
        $buffer .= "\n";
        $buffer .= $indent . '									</span>';
        $buffer .= "\n";
        $buffer .= $indent . '								</span>';
        $buffer .= "\n";
        $buffer .= $indent . '							</span>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div><!--/span-->';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="space-2"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '					';
        $buffer .= "\n";
        $buffer .= $indent . '					<select multiple class="width-80 chosen-select" id="form-field-select-4" data-placeholder="Choose a Country...">';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="">&nbsp;</option>';
        $buffer .= "\n";
        // 'page.states' section
        $buffer .= $this->sectionB9571f13fc6ecd3113cf2e73ca385717($context, $indent, $context->findDot('page.states'));
        $buffer .= $indent . '					</select>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div><!--/span-->';
        $buffer .= "\n";
        $buffer .= $indent . '		  ';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!--/row-->';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="space-24"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="header smaller lighter blue">Checkboxes & Radio <small>All Checkboxes, Radios and Switch Buttons Are Pure CSS</small></h3>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="col-xs-12 col-sm-5">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="control-group">';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="control-label bolder blue">Checkbox</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="checkbox">';
        $buffer .= "\n";
        $buffer .= $indent . '				<label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<input name="form-field-checkbox" type="checkbox" class="ace" /><span class="lbl"> choice 1</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="checkbox">';
        $buffer .= "\n";
        $buffer .= $indent . '				<label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<input name="form-field-checkbox" type="checkbox" class="ace" /><span class="lbl">  choice 2</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="checkbox">';
        $buffer .= "\n";
        $buffer .= $indent . '				<label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox" /><span class="lbl"> choice 3</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="checkbox">';
        $buffer .= "\n";
        $buffer .= $indent . '				<label class="block">';
        $buffer .= "\n";
        $buffer .= $indent . '					<input name="form-field-checkbox" disabled type="checkbox" class="ace" /><span class="lbl"> disabled</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="col-xs-12 col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="control-group">';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="control-label bolder blue">Radio</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="radio">';
        $buffer .= "\n";
        $buffer .= $indent . '				<label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<input name="form-field-radio" type="radio" class="ace" /><span class="lbl"> radio option 1</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="radio">';
        $buffer .= "\n";
        $buffer .= $indent . '				<label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<input name="form-field-radio" type="radio" class="ace" /><span class="lbl"> radio option 2</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="radio">';
        $buffer .= "\n";
        $buffer .= $indent . '				<label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<input name="form-field-radio" type="radio" class="ace" /><span class="lbl"> radio option 3</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="radio">';
        $buffer .= "\n";
        $buffer .= $indent . '				<label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<input disabled name="form-field-radio" type="radio" class="ace" /><span class="lbl"> disabled</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!--/row-->';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '		<label class="control-label col-xs-12 col-sm-3">On/Off Switches</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="controls col-xs-12 col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="col-xs-3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<label><input name="switch-field-1" class="ace ace-switch" type="checkbox" /><span class="lbl"></span></label>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="col-xs-3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<label><input name="switch-field-1" class="ace ace-switch ace-switch-2" type="checkbox" /><span class="lbl"></span></label>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="col-xs-3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<label><input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox" /><span class="lbl"></span></label>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="col-xs-3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<label><input name="switch-field-1" class="ace ace-switch ace-switch-4" type="checkbox" /><span class="lbl"></span></label>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="col-xs-3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<label><input name="switch-field-1" class="ace ace-switch ace-switch-5" type="checkbox" /><span class="lbl"></span></label>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="col-xs-3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<label><input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox" /><span class="lbl"></span></label>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="col-xs-3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<label><input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" /><span class="lbl"></span></label>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4>Custom File Input</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="widget-toolbar">';
        $buffer .= "\n";
        $buffer .= $indent . '						<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '						<a href="#" data-action="close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '					</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '				 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '					<input type="file" id="id-input-file-2" />';
        $buffer .= "\n";
        $buffer .= $indent . '					<input multiple type="file" id="id-input-file-3" />';
        $buffer .= "\n";
        $buffer .= $indent . '					<label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<input type="checkbox" name="file-format" id="id-file-format" class="ace" /><span class="lbl"> Allow only images</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					</label>';
        $buffer .= "\n";
        $buffer .= $indent . '				 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4>jQuery UI Sliders</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '				 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="col-xs-3 col-md-2">';
        $buffer .= "\n";
        $buffer .= $indent . '							<div id="slider-range"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="col-xs-9 col-md-10">';
        $buffer .= "\n";
        $buffer .= $indent . '							<div id="eq">';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="ui-slider-green">77</span>';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="ui-slider-red">55</span>';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="ui-slider-purple">33</span>';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="ui-slider-orange">40</span>';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="ui-slider-dark">88</span>';
        $buffer .= "\n";
        $buffer .= $indent . '							</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4>Spinners</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '				 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '					<input type="text" class="input-mini" id="spinner1" />';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="space-6"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<input type="text" class="input-mini" id="spinner2" />';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="space-6"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<input type="text" class="input-mini" id="spinner3" />';
        $buffer .= "\n";
        $buffer .= $indent . '				 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4>Date Picker</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="widget-toolbar">';
        $buffer .= "\n";
        $buffer .= $indent . '						<a href="#" data-action="settings"><i class="icon-cog"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '						<a href="#" data-action="reload"><i class="icon-refresh"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '						<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '						<a href="#" data-action="close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '					</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '				 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '						<label for="id-date-picker-1">Date Picker</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '							<div class="col-xs-8 col-sm-11">';
        $buffer .= "\n";
        $buffer .= $indent . '								<div class="input-group">';
        $buffer .= "\n";
        $buffer .= $indent . '									<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />';
        $buffer .= "\n";
        $buffer .= $indent . '									<span class="input-group-addon">';
        $buffer .= "\n";
        $buffer .= $indent . '										<i class="icon-calendar bigger-110"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '									</span>';
        $buffer .= "\n";
        $buffer .= $indent . '								</div>';
        $buffer .= "\n";
        $buffer .= $indent . '							</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '						<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '						';
        $buffer .= "\n";
        $buffer .= $indent . '						<label for="id-date-range-picker-1">Date Range Picker</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '							<div class="col-xs-8 col-sm-11">';
        $buffer .= "\n";
        $buffer .= $indent . '								<div class="input-group">';
        $buffer .= "\n";
        $buffer .= $indent . '									<span class="input-group-addon">';
        $buffer .= "\n";
        $buffer .= $indent . '										<i class="icon-calendar bigger-110"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '									</span>';
        $buffer .= "\n";
        $buffer .= $indent . '									<input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1" />';
        $buffer .= "\n";
        $buffer .= $indent . '								</div>';
        $buffer .= "\n";
        $buffer .= $indent . '							</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						';
        $buffer .= "\n";
        $buffer .= $indent . '						<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '						';
        $buffer .= "\n";
        $buffer .= $indent . '						<label for="timepicker1">Time Picker</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="input-group bootstrap-timepicker">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input id="timepicker1" type="text" class="form-control" />';
        $buffer .= "\n";
        $buffer .= $indent . '							<span class="input-group-addon">';
        $buffer .= "\n";
        $buffer .= $indent . '								<i class="icon-time bigger-110"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '							</span>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4><i class="icon-tint"></i> Color Picker</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '				 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '				';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label for="colorpicker1">Color Picker</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="control-group">';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="bootstrap-colorpicker">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input id="colorpicker1" type="text" class="input-small" />							';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					';
        $buffer .= "\n";
        $buffer .= $indent . '					<hr />';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="simple-colorpicker-1">Custom Color Picker</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<select id="simple-colorpicker-1" class="hide">';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#ac725e">#ac725e</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#d06b64">#d06b64</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#f83a22">#f83a22</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#fa573c">#fa573c</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#ff7537">#ff7537</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#ffad46" selected>#ffad46</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#42d692">#42d692</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#16a765">#16a765</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#7bd148">#7bd148</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#b3dc6c">#b3dc6c</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#fbe983">#fbe983</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#fad165">#fad165</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#92e1c0">#92e1c0</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#9fe1e7">#9fe1e7</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#9fc6e7">#9fc6e7</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#4986e7">#4986e7</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#9a9cff">#9a9cff</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#b99aff">#b99aff</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#c2c2c2">#c2c2c2</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#cabdbf">#cabdbf</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#cca6ac">#cca6ac</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#f691b2">#f691b2</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#cd74e6">#cd74e6</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#a47ae2">#a47ae2</option>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <option value="#555">#555</option>';
        $buffer .= "\n";
        $buffer .= $indent . '					</select>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4><i class="icon-dashboard"></i> Knob Input</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '				 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="control-group">';
        $buffer .= "\n";
        $buffer .= $indent . '						';
        $buffer .= "\n";
        $buffer .= $indent . '						  <div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '							<div class="col-xs-6 center">';
        $buffer .= "\n";
        $buffer .= $indent . '								<div class="knob-container inline">';
        $buffer .= "\n";
        $buffer .= $indent . '									<input type="text" class="input-small knob" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" />';
        $buffer .= "\n";
        $buffer .= $indent . '								</div>';
        $buffer .= "\n";
        $buffer .= $indent . '							</div>';
        $buffer .= "\n";
        $buffer .= $indent . '							<div class="col-xs-6  center">';
        $buffer .= "\n";
        $buffer .= $indent . '								<div class="knob-container inline">';
        $buffer .= "\n";
        $buffer .= $indent . '									<input type="text" class="input-small knob" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgColor="#87B87F" data-displayPrevious=true data-angleArc=250 data-angleOffset=-125 />';
        $buffer .= "\n";
        $buffer .= $indent . '								</div>';
        $buffer .= "\n";
        $buffer .= $indent . '							</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '						  <div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '							<div class="col-xs-12 center">';
        $buffer .= "\n";
        $buffer .= $indent . '								<div class="knob-container inline">';
        $buffer .= "\n";
        $buffer .= $indent . '									<input type="text" class="input-small knob" data-min="0" data-max="10"  data-width="150" data-height="150" data-thickness=".2" data-fgColor="#B8877F" data-angleOffset=90 data-cursor="true" />';
        $buffer .= "\n";
        $buffer .= $indent . '								</div>';
        $buffer .= "\n";
        $buffer .= $indent . '							</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '						';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</form>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="hr hr-18 dotted hr-double"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<h4 class="pink">';
        $buffer .= "\n";
        $buffer .= $indent . '	<i class="icon-hand-right green"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '	<a href="#modal-form" role="button" class="blue" data-toggle="modal">';
        $buffer .= "\n";
        $buffer .= $indent . '		Form Inside a Modal Box';
        $buffer .= "\n";
        $buffer .= $indent . '	</a>';
        $buffer .= "\n";
        $buffer .= $indent . '</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="hr hr-18 dotted hr-double"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<h4 class="header green">Form Layouts</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="col-sm-5">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		  <div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h4>Default</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '		  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '		  <div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		   <div class="widget-main no-padding">';
        $buffer .= "\n";
        $buffer .= $indent . '			<form>';
        $buffer .= "\n";
        $buffer .= $indent . '			  <!-- <legend>Form</legend> -->';
        $buffer .= "\n";
        $buffer .= $indent . '			  <fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '				<label>Label name</label>';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="text" placeholder="Type something&hellip;">';
        $buffer .= "\n";
        $buffer .= $indent . '				<span class="help-block">Example block-level help text here.</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				<label class="pull-right">';
        $buffer .= "\n";
        $buffer .= $indent . '				  <input type="checkbox" class="ace" /><span class="lbl"> check me out</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			  </fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '			  <div class="form-actions center">';
        $buffer .= "\n";
        $buffer .= $indent . '				<button type="button" class="btn btn-sm btn-success">Submit <i class="icon-arrow-right icon-on-right bigger-110"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '			  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</form>';
        $buffer .= "\n";
        $buffer .= $indent . '		   </div>';
        $buffer .= "\n";
        $buffer .= $indent . '		  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="col-sm-7">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		  <div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h4>Inline Forms</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '		  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '		  <div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		   <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '			<form class="form-inline">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="text" class="input-small" placeholder="Username" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="password" class="input-small" placeholder="Password" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="inline">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="checkbox" class="ace" /><span class="lbl"> remember me</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<button type="button" class="btn btn-info btn-sm"><i class="icon-key bigger-110"></i>Login</button>';
        $buffer .= "\n";
        $buffer .= $indent . '			</form>';
        $buffer .= "\n";
        $buffer .= $indent . '		   </div>';
        $buffer .= "\n";
        $buffer .= $indent . '		  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	  ';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="space-6"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	  ';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		  <div class="widget-header widget-header-small">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h5 class="lighter">Search Form</h5>';
        $buffer .= "\n";
        $buffer .= $indent . '		  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '		  <div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		   <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '			<form class="form-search">';
        $buffer .= "\n";
        $buffer .= $indent . '			  <div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '			   <div class="col-xs-12 col-sm-8">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="input-group">';
        $buffer .= "\n";
        $buffer .= $indent . '					<input type="text" class="form-control search-query" placeholder="Type your query" />';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="input-group-btn">';
        $buffer .= "\n";
        $buffer .= $indent . '						<button type="button" class="btn btn-purple btn-sm">Search <i class="icon-search icon-on-right bigger-110"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '					</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			   </div>';
        $buffer .= "\n";
        $buffer .= $indent . '			  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</form>';
        $buffer .= "\n";
        $buffer .= $indent . '		   </div>';
        $buffer .= "\n";
        $buffer .= $indent . '		  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div id="modal-form" class="modal" tabindex="-1">';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="modal-dialog">';
        $buffer .= "\n";
        $buffer .= $indent . '  <div class="modal-content">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="modal-header">';
        $buffer .= "\n";
        $buffer .= $indent . '		<button type="button" class="close" data-dismiss="modal">&times;</button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<h4 class="blue bigger">Please fill the following form fields</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="modal-body overflow-visible">';
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="col-xs-12 col-sm-5">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="space"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="file" />';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="col-xs-12 col-sm-7">';
        $buffer .= "\n";
        $buffer .= $indent . '								';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-select-3">Location</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<select class="chosen-select" data-placeholder="Choose a Country...">';
        $buffer .= "\n";
        $buffer .= $indent . '							<option value="">&nbsp;</option>';
        $buffer .= "\n";
        // 'page.states' section
        $buffer .= $this->section7af7225845d19630bf91ad898a32a3a2($context, $indent, $context->findDot('page.states'));
        $buffer .= $indent . '						</select>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="space-4"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '				';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-username">Username</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<input class="input-large" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="space-4"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="form-group">';
        $buffer .= "\n";
        $buffer .= $indent . '					<label for="form-field-first">Name</label>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<input class="input-medium" type="text" id="form-field-first" placeholder="First Name" value="Alex" />';
        $buffer .= "\n";
        $buffer .= $indent . '						<input class="input-medium" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="modal-footer">';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-sm" data-dismiss="modal"><i class="icon-remove"></i> Cancel</button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-sm btn-primary"><i class="icon-ok"></i> Save</button>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '  </div>';
        $buffer .= "\n";
        $buffer .= $indent . ' </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionBad5c6996822ab0a7ef5abef84a13847(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<option value=\'{{abbr}}\'>{{name}}</option>
						  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '							<option value=\'';
                $value = $this->resolveValue($context->find('abbr'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</option>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDaed8b0a2479f413c3876988777b909f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						  <option value=\'{{abbr}}\'>{{name}}</option>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						  <option value=\'';
                $value = $this->resolveValue($context->find('abbr'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</option>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF877aa7a1eedbac8a9093ea1e7bd2c70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						  <option value=\'{{abbr}}\'>{{name}}</option>
						 ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						  <option value=\'';
                $value = $this->resolveValue($context->find('abbr'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</option>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9571f13fc6ecd3113cf2e73ca385717(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						  <option value=\'{{abbr}}\'>{{name}}</option>
						  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						  <option value=\'';
                $value = $this->resolveValue($context->find('abbr'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</option>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7af7225845d19630bf91ad898a32a3a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<option value=\'{{abbr}}\'>{{name}}</option>
							';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '							<option value=\'';
                $value = $this->resolveValue($context->find('abbr'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</option>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
