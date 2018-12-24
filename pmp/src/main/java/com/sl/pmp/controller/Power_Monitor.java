package com.sl.pmp.controller;

import java.io.UnsupportedEncodingException;
import java.util.ArrayList;
import java.util.Collection;
import java.util.HashMap;
import java.util.List;
import java.util.Set;

import javax.servlet.http.HttpServletRequest;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

import com.sl.pmp.service.PowerDataService;

@Controller
@RequestMapping("/pmp")
public class Power_Monitor {
	@Autowired
	PowerDataService powerDataImpl;
	
	
	@RequestMapping("/getPowerData")
	@ResponseBody
	public HashMap<Object, Object> get_All_Ajax(String tg) throws UnsupportedEncodingException{
		HashMap<Object, Object> _data=powerDataImpl.getAllPowerData();
		return _data;
	}

	@RequestMapping("/getPowerMonitorPag")
	public String getPowerMonitorPag(HttpServletRequest request, Model model) throws UnsupportedEncodingException{
		HashMap<Object, Object> _data=powerDataImpl.getAllPowerData4java();
		List<String> aliasList= powerDataImpl.getAlias("");
		System.out.println(aliasList.get(0));
		
		model.addAttribute("tt",99);
		model.addAttribute(_data);
		model.addAttribute(aliasList);
		
		return "pmpPag/power_monitor";//monitor_whgc
	}
}
